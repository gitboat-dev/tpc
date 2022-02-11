<?php

namespace App\Http\Controllers\backend\blog;

use App\Http\Controllers\Controller;
use App\Models\backend\article;
use App\Models\backend\article_banner;
use DB;
use File;
use Illuminate\Http\Request;
use Image;
use Log;
use Validator;

class blogController extends Controller {
	private $nav_frontend_page_setting = 1;
	private $nav_blog = 1;
	public function __construct() {
		$this->middleware('admin');
	}
	public function index() {
		$data = [];
		$data['nav_frontend_page_setting'] = $this->nav_frontend_page_setting;
		$data['nav_blog'] = $this->nav_blog;
		return view('backend.blog.index', $data);
	}
	public function create(Request $request) {
		$data = [];
		$data['success'] = false;
		DB::beginTransaction();
		try {
			$article = new article;
			$article->created_at = date('Y-m-d H:i:s');
			$article->save();
			DB::commit();
			$data['next_page'] = '/backoffice/blog/edit/' . $article->id;
			$dir = storage_path('blog/images/' . $article->id . '/banner/');
			$dir2 = storage_path('blog/images/' . $article->id . '/cover/');
			if (!is_dir($dir)) {
				mkdir($dir, 0777, true);
				if (is_dir($dir)) {
					$data['success'] = true;
				}
			} else {
				$data['success'] = true;
			}
			if (!is_dir($dir2)) {
				mkdir($dir2, 0777, true);
				if (is_dir($dir2)) {
					$data['success'] = true;
				}
			} else {
				$data['success'] = true;
			}
			if (!$data['success']) {
				$article = article::find($article->id);
				$article->delete();
			}
		} catch (\Throwable $e) {
			DB::rollback();
			Log::debug('blogController[create] : ' . $e->getMessage());
		}
		return $data;
	}
	public function edit($id) {
		$id = (int) $id;
		$data = [];
		$data['nav_frontend_page_setting'] = $this->nav_frontend_page_setting;
		$data['nav_blog'] = $this->nav_blog;
		$data['blog'] = article::find($id);
		if ($data['blog']->article_slug) {
			$data['slug'] = request()->root() . '/blog/' . $data['blog']->article_slug;
		}
		if ($data['blog']->cover_image) {
			$path_cover = storage_path('blog/images/' . $data['blog']->id . '/cover/' . $data['blog']->cover_image);
			$data['blog_cover'] = File::exists($path_cover) ? '/blog/cover/' . $data['blog']->id . '/' . $data['blog']->cover_image : "";
			$data['blog_cover_size'] = $this->calSizeFile(File::size($path_cover));
		}
		$banners = article_banner::where('ref_article_id', $id)
			->orderBy('sort', 'asc')
			->get();
		if ($banners) {
			foreach ($banners as $k => $banner) {
				$path = storage_path('blog/images/' . $banner['ref_article_id'] . '/banner/' . $banner['name']);
				$data['blog_banner'][$k]['id'] = $banner['id'];
				$data['blog_banner'][$k]['path'] = File::exists($path) ? ' /blog/banner/' . $banner['ref_article_id'] . '/' . $banner['name'] : "";
				$data['blog_banner'][$k]['sort'] = $banner['sort'];
				$data['blog_banner'][$k]['size'] = $this->calSizeFile(File::size($path));
			}
		}
		if (count($banners) > 3) {
			$data['noimg'] = 0;
		} else {

			$data['noimg'] = 3 - count($banners) == 0 ? 0 : 3 - count($banners);
		}
		return view('backend.blog.edit', $data);
	}
	public function save(Request $request) {
		$data = [];
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'id' => 'required|numeric',
			'active' => 'required|numeric',
			'type' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[save] :' . $errors);
			return $data;
		}
		$id = (int) $request->id;
		$slug = !$request->slug ? $this->blog_slug($request->title, $id) : $this->blog_slug($request->slug, $id);
		if (!$slug['success']) {
			$data['msg'] = 'Slug ไม่สามารถซ้ำกันได้';
			return $data;
		}
		DB::beginTransaction();
		try {
			$article = article::find($id);
			$article->active = $request->active;
			$article->article_type = $request->type;
			$article->article_date_start = $request->start;
			$article->article_title = $request->title;
			$article->article_description = $request->description;
			if ($request->type == 1) {
				$article->article_details = $request->details;
			} elseif ($request->type == 2) {
				$article->article_columns = $request->columns;
			}
			$article->article_slug = $slug['slug'];
			$article->seo_title = $request->title_seo;
			$article->seo_keywords = $request->keywords_seo;
			$article->seo_description = $request->description_seo;
			$article->updated_at = date('Y-m-d H:i:s');
			$article->save();
			DB::commit();
			$data['success'] = true;
			$data['slug'] = $article->article_slug;
			$data['url'] = request()->root() . '/blog/' . $article->article_slug;
		} catch (\Throwable $e) {
			DB::rollback();
			Log::debug('blogController[save] : ' . $e->getMessage());
		}
		return $data;
	}
	public function delete(Request $request) {
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'blog_ids' => 'required|array',
			'blog_ids.*' => 'numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[delete] :' . $errors);
			return $data;
		}
		DB::beginTransaction();
		try {
			$count_success = 0;
			foreach ($request->blog_ids as $ids) {
				$dir = storage_path('/blog/images/' . $ids);
				if (is_dir($dir)) {
					File::deleteDirectory($dir);
					if (!is_dir($dir)) {
						$count_success++;
					}
				}
			}
			if (count($request->blog_ids) == $count_success) {
				article::whereIn('id', $request->blog_ids)->delete();
			}
			DB::commit();
			$data['success'] = true;
		} catch (\Throwable $e) {
			DB::rollback();
			Log::debug('blogController[delete] : ' . $e->getMessage());
		}
		return $data;
	}
	public function active(Request $request) {
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'blog_ids' => 'required|array',
			'blog_ids.*' => 'numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[active] :' . $errors);
			return $data;
		}
		$article_inactive = article::whereIn('id', $request->blog_ids)
			->where('active', 0)
			->pluck('id')
			->toArray();
		$article_active = article::whereIn('id', $request->blog_ids)
			->where('active', 1)
			->pluck('id')
			->toArray();
		DB::beginTransaction();
		try {
			article::whereIn('id', $article_inactive)->update(['active' => 1]);
			article::whereIn('id', $article_active)->update(['active' => 0]);
			DB::commit();
			$data['success'] = true;
		} catch (\Throwable $e) {
			DB::rollback();
			Log::debug('blogController[active] : ' . $e->getMessage());
		}
		return $data;
	}
	public function blog_tb(Request $request) {
		$columns = array(
			0 => "id",
			1 => "id",
			2 => "active",
			3 => "article_type",
			4 => "article_author",
			5 => "article_title",
			6 => "article_remark",
			7 => "id",
		);
		$totalData = article::count();
		$limit = $request->input('length');
		$start = $request->input('start');
		$order = $columns[$request->input('order.0.column')];
		$dir = $request->input('order.0.dir');
		if (empty($request->input('search.value'))) {
			$posts = article::offset($start)
				->limit($limit)
				->orderBy($order, $dir)
				->get();
			$totalFiltered = $totalData;
		} else {
			$search = $request->input('search.value');
			$posts = article::where('article_author', 'like', '%' . $search . '%')
				->orWhere('article_title', 'like', '%' . $search . '%')
				->orWhere('article_remark', 'like', '%' . $search . '%')
				->offset($start)
				->limit($limit)
				->orderBy($order, $dir)
				->get();
			$totalFiltered = article::where('article_author', 'like', '%' . $search . '%')
				->orWhere('article_title', 'like', '%' . $search . '%')
				->orWhere('article_remark', 'like', '%' . $search . '%')
				->count();
		}
		$data = array();
		$i = 0;
		if ($posts) {
			foreach ($posts as $key => $r) {
				$active = $r['active'] == 1 ? '<span style="color:green;">Active</span>' : '<span style="color:red;">Inactive</span>';
				$type = $r['article_type'] == 1 ? "News" : "Columns";
				$data[$i++] = [
					'<input type="checkbox" id="r' . $r['id'] . '" class="row_check" onclick="blog_select(this,' . $r['id'] . ',1)">',
					sprintf('%05d', $r['id']),
					$active,
					$type,
					$r['article_author'],
					$r['article_title'],
					$r['article_remark'],
					'<a href="/backoffice/blog/edit/' . $r['id'] . '" class="dt-button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</a>',
				];
			}
		}
		$json_data = array(
			"draw" => intval($request->input('draw')),
			"recordsTotal" => intval($totalData),
			"recordsFiltered" => intval($totalFiltered),
			"data" => $data,
		);
		return json_encode($json_data);
	}
	public function banner_upload(Request $request) {
		$data = [];
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'files' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'blog_id' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[banner] :' . $errors);
			return $data;
		}
		$file = file_exists($request->file('files')) ? $request->file('files') : null;
		if ($file) {
			$ext = 'webp';
			$size = $this->calSizeFile($file->getSize());
			$sequence = article_banner::where('ref_article_id', $request->blog_id)->count();
			$sequence = $sequence + 1;
			$filename = "banner_" . date('YmdHis') . $sequence . "." . $ext;
			DB::beginTransaction();
			try {
				$article_banner = new article_banner;
				$article_banner->ref_article_id = (int) $request->blog_id;
				$article_banner->name = $filename;
				$article_banner->sort = $sequence;
				$article_banner->created_at = date('Y-m-d H:i:s');
				$article_banner->save();
				DB::commit();
				$path = storage_path('blog/images/' . $article_banner->ref_article_id . '/banner/');
				if (is_dir($path)) {
					Image::make($file)->encode('webp', 90)->save($path . '/' . $filename);
				}
				if (File::exists($path . '/' . $filename)) {
					$data['success'] = true;
					$data['id'] = $article_banner->id;
					$data['sort'] = $article_banner->sort;
					$data['path'] = '/blog/banner/' . $article_banner->ref_article_id . '/' . $article_banner->name;
					$data['size'] = $size;
				} else {
					$article_banner->delete();
				}
			} catch (\Throwable $e) {
				DB::rollback();
				Log::debug('blogController[banner] : ' . $e->getMessage());
			}
		}
		return $data;
	}
	public function banner_delete(Request $request) {
		$data = [];
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'image_id' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[banner_delete] :' . $errors);
			return $data;
		}
		$id = (int) $request->image_id;
		DB::beginTransaction();
		try {
			$article_banner = article_banner::find($id);
			$path = storage_path('blog/images/' . $article_banner->ref_article_id . '/banner/' . $article_banner->name);
			if (File::exists($path)) {
				unlink($path);
			}
			DB::commit();
			if (!File::exists($path)) {
				$article_banner->delete();
				$data['success'] = true;
				$data['image_id'] = $id;
			}
		} catch (\Throwable $e) {
			DB::rollback();
			Log::debug('blogController[banner_delete] : ' . $e->getMessage());
		}
		return $data;
	}
	public function banner_sort(Request $request) {
		$validator = Validator::make($request->all(), [
			'id' => 'required|numeric',
			'blog_id' => 'required|numeric',
			'sort' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[banner_sort] : ' . $errors->all());
		}
		$article_banner = article_banner::where('id', $request->id)
			->where('ref_article_id', $request->blog_id)
			->first();
		if ($article_banner) {
			DB::beginTransaction();
			try {
				$article_banner->sort = $request->sort;
				$article_banner->save();
				DB::commit();
				return 'success';
			} catch (\Exception $e) {
				DB::rollback();
				Log::debug('blogController[banner_sort] : ' . $e->getMessage());
			}
		}
	}
	public function cover_upload(Request $request) {
		$data = [];
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'files' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'blog_id' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[cover_upload] :' . $errors);
			return $data;
		}
		$file = file_exists($request->file('files')) ? $request->file('files') : null;
		if ($file) {
			$ext = 'webp';
			$size = $this->calSizeFile($file->getSize());
			$filename = "cover_" . date('YmdHis') . "." . $ext;
			DB::beginTransaction();
			try {
				$article = article::find($request->blog_id);
				$article->cover_image = $filename;
				$article->save();
				DB::commit();
				$path = storage_path('blog/images/' . $article->id . '/cover/');
				if (is_dir($path)) {
					Image::make($file)->encode('webp', 90)->save($path . '/' . $filename);
				}
				if (File::exists($path . '/' . $filename)) {
					$data['success'] = true;
					$data['id'] = $article->id;
					$data['path'] = '/blog/cover/' . $article->id . '/' . $article->cover_image;
					$data['size'] = $size;
				} else {
					DB::beginTransaction();
					try {
						$article->cover_image = NULL;
						$article->save();
						DB::commit();
						Log::debug('blogController[cover_upload] : ลบข้อมูลรูปภาพที่ upload ไม่สำเร็จ เรียบร้อย');
					} catch (\Throwable $e) {
						DB::rollback();
						Log::debug('blogController[cover_upload] : ' . $e->getMessage());
					}

				}
			} catch (\Throwable $e) {
				DB::rollback();
				Log::debug('blogController[cover_upload] : ' . $e->getMessage());
			}
		}
		return $data;
	}
	public function cover_delete(Request $request) {
		$data = [];
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'blog_id' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[cover_delete] :' . $errors);
			return $data;
		}
		$id = (int) $request->blog_id;
		DB::beginTransaction();
		try {
			$article = article::find($id);
			$path = storage_path('blog/images/' . $article->id . '/cover/' . $article->cover_image);
			if (File::exists($path)) {
				unlink($path);
			}
			DB::commit();
			if (!File::exists($path)) {
				$article->cover_image = NULL;
				if ($article->save()) {
					$data['success'] = true;
					$data['blog_id'] = $id;
				}
			}
		} catch (\Throwable $e) {
			DB::rollback();
			Log::debug('blogController[cover_delete] : ' . $e->getMessage());
		}
		return $data;
	}
	public function gallery_show(Request $request) {
		$data = [];
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'blog_id' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[gallery_show] :' . $errors);
			return $data;
		}
		$id = (int) $request->blog_id;
		$dir = storage_path('blog/images/' . $id . '/image/');
		if (is_dir($dir)) {
			$data['success'] = true;
			$data['files'] = [];
			$Files = glob($dir . '*');
			$countFiles = count($Files);
			foreach ($Files as $k => $f) {
				$k = $k + 1;
				if (isset($f)) {
					$data['files'][$k] = [
						'filename' => pathinfo($f)['basename'],
						'id' => $id,
						'path' => '/blog/gallery/' . $id . '/' . pathinfo($f)['basename'],
					];
				}
				if ($k == $countFiles) {
					break;
				}
			}
		}
		return $data;
	}
	public function gallery_upload(Request $request) {
		$data = [];
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'files' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'blog_id' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[gallery_upload] :' . $errors);
			return $data;
		}
		$file = file_exists($request->file('files')) ? $request->file('files') : null;
		if ($file) {
			$id = $request->blog_id ? (int) $request->blog_id : 0;
			$ext = 'webp';
			$originName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
			$dir = storage_path('blog/images/' . $id . '/image/');
			if (!is_dir($dir)) {
				mkdir($dir, 0777, true);
				$filename = $originName . "." . $ext;
			} else {
				$pattern = "/" . $originName . "/";
				$Files = glob($dir . '*');
				$countFiles = 0;
				foreach ($Files as $k => $f) {
					if (isset($f)) {
						if (preg_match($pattern, $f, $matches)) {
							$countFiles++;
						}
					}
				}
				if ($countFiles > 0) {
					$filename = $originName . "-" . $countFiles . "." . $ext;
				} else {
					$filename = $originName . "." . $ext;
				}
			}
			Image::make($file)->encode('webp', 90)->save($dir . '/' . $filename);
			if (File::exists($dir . '/' . $filename)) {
				$data['success'] = true;
				$data['id'] = $id;
				$data['path'] = '/blog/gallery/' . $id . '/' . $filename;
				$data['filename'] = $filename;
			}
		}
		return $data;
	}
	function gallery_delete(Request $request) {
		$data = [];
		$data['success'] = false;
		$validator = Validator::make($request->all(), [
			'file' => 'required',
			'blog_id' => 'required|numeric',
		]);
		if ($validator->fails()) {
			$errors = $validator->errors();
			Log::debug('blogController[gallery_delete] :' . $errors);
			return $data;
		}
		$id = (int) $request->blog_id;
		if (isset($request->code) && $request->code) {
			if ($this->check_img_content($id, $request->code, $request->file)['success']) {
				$data['msg'] = "ไม่สามารถลบได้ เนื่องจากรูปภาพนี้กำลังถูกใช้งาน<br>กรุณาตรวจสอบรูปภาพในเนื้อหาของคุณ";
				return $data;
			}
		}
		$path = storage_path('blog/images/' . $id . '/image/' . $request->file);
		if (File::exists($path)) {
			unlink($path);
			if (!File::exists($path)) {
				$data['success'] = true;
			}
		}
		return $data;
	}

	/*--------------------------------------private function--------------------------------------*/

	private function check_img_content($id, $code, $filename) {
		$id = (int) $id;
		$data = [];
		$data['success'] = false;
		if ($id > 0 && $filename) {
			$pattern = '/\/blog\/gallery\/' . $id . '\/' . $filename . '/';
			if (isset($code) && $code) {
				$doc = new \DOMDocument();
				@$doc->loadHTML($code);
				$images = $doc->getElementsByTagName('img');
				if (count($images) > 0) {
					foreach ($images as $k => $img) {
						$search_img = $img->getAttribute('src');
						if (preg_match($pattern, $search_img, $matches)) {
							$data['success'] = true;
						}
					}
				}
			}
		}
		return $data;
	}
	private function blog_slug($slug, $id) {
		$data = [];
		$data['success'] = false;
		if (isset($slug) && $slug) {
			$slug = str_replace(" ", "-", $slug);
			$article_slug = article::where('id', '!=', $id)
				->where('article_slug', $slug)
				->count();
			if ($article_slug < 1) {
				$data['success'] = true;
				$data['slug'] = $slug;
			}
		} else {
			$data['success'] = true;
			$data['slug'] = NULL;
		}
		return $data;
	}
	private function calSizeFile($sizefile) {
		if ($sizefile >= 1073741824) {
			$sizefile = floor(number_format($sizefile / 1073741824, 2)) . ' GB';
		} elseif ($sizefile >= 1048576) {
			$sizefile = floor(number_format($sizefile / 1048576, 2)) . ' MB';
		} elseif ($sizefile >= 1024) {
			$sizefile = floor(number_format($sizefile / 1024, 2)) . ' KB';
		} elseif ($sizefile > 1) {
			$sizefile = floor($sizefile) . ' bytes';
		} elseif ($sizefile == 1) {
			$sizefile = floor($sizefile) . ' byte';
		} else {
			$sizefile = '0 bytes';
		}
		return $sizefile;
	}
}