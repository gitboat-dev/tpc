<?php

namespace App\Http\Controllers\frontend\blog;

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\clean\cleanController;
use App\Http\Controllers\Func_controller;
use App\Models\backend\article_banner;
use App\Models\frontend\article;
use Jenssegers\Agent\Agent;

class blogController extends Controller {
	public $active_news = 'activemenu';
	public function index() {
		$data = [];
		$blog = article::orderBy('id','desc');
        $blog_new = $blog->take(5)->get();
        $blog = $blog->Paginate(10);
		$chkie = new Func_controller;
		$agent = new Agent();
		if ($blog) {
            $cover = $this->get_cover();
			foreach ($blog as $a) {
                $a->article_date_start = date("Y-m-d", strtotime($a->article_date_start));
				$a->banner = $this->get_banners($a['id']);
                $a->cover = $cover[$a['id']];
			}
			$data['blogs'] = $blog;
			$data['blogs_new'] = $blog_new;
			$data['chkie'] = $chkie->chk();
			$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
			$data['active_news'] = $this->active_news;
			$data['title'] = "Columns & News | Thai Polyester CO., LTD";
            $data['head_line'] = "Columns & News";
			$data['des'] = "";
			$data['key'] = "";
		}
        return view('blogs.index',$data);
	}
    public function columns() {
		$data = [];
		$blog = article::where('article_type',2)->orderBy('id','desc');
        $blog_new = $blog->take(5)->get();
        $blog = $blog->Paginate(10);
		$chkie = new Func_controller;
		$agent = new Agent();
		if ($blog) {
            $cover = $this->get_cover();
			foreach ($blog as $a) {
                $a->article_date_start = date("Y-m-d", strtotime($a->article_date_start));
				$a->banner = $this->get_banners($a['id']);
                $a->cover = $cover[$a['id']];
			}
			$data['blogs'] = $blog;
			$data['blogs_new'] = $blog_new;
			$data['chkie'] = $chkie->chk();
			$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
			$data['active_news'] = $this->active_news;
			$data['title'] = "Columns | Thai Polyester CO., LTD";
            $data['head_line'] = "Columns";
            $data['before_page'] = "Columns & News";
			$data['des'] = "";
			$data['key'] = "";
		}
        return view('blogs.index',$data);
	}
    public function news() {
		$data = [];
		$blog = article::where('article_type',1)->orderBy('id','desc');
        $blog_new = $blog->take(5)->get();
        $blog = $blog->Paginate(10);
		$chkie = new Func_controller;
		$agent = new Agent();
		if ($blog) {
            $cover = $this->get_cover();
			foreach ($blog as $a) {
                $a->article_date_start = date("Y-m-d", strtotime($a->article_date_start));
				$a->banner = $this->get_banners($a['id']);
                $a->cover = $cover[$a['id']];
			}
			$data['blogs'] = $blog;
			$data['blogs_new'] = $blog_new;
			$data['chkie'] = $chkie->chk();
			$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
			$data['active_news'] = $this->active_news;
			$data['title'] = "News | Thai Polyester CO., LTD";
            $data['head_line'] = "News";
            $data['before_page'] = "Columns & News";
			$data['des'] = "";
			$data['key'] = "";
		}
        return view('blogs.index',$data);
	}
	public function blog($slug) {
		$data = [];
		$clean = new cleanController;
		$chkie = new Func_controller;
		$agent = new Agent();
		$slug = $clean->clean(trim($slug));
		if ($slug) {
			$blog = article::where('article_slug', $slug)->first();
			if ($blog) {
				$blogs_news = article::where('id', '!=', $blog->id)
					->where('article_type', 1)
					->orderBy('created_at', 'asc')
					->take(5)
					->get();
				$blogs_columns = article::where('id', '!=', $blog->id)
					->where('article_type', 2)
					->orderBy('created_at', 'asc')
					->take(5)
					->get();
				if ($blogs_news) {
					foreach ($blogs_news as $news) {
						$news->banner = $this->get_banners($news['id']);
					}
				}
				if ($blogs_columns) {
					foreach ($blogs_columns as $columns) {
						$columns->banner = $this->get_banners($columns['id']);
					}
				}
				$blog->banner = $this->get_banners($blog->id);
				$data['blog'] = $blog;
				$data['chkie'] = $chkie->chk();
				$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);
				$data['active_news'] = $this->active_news;
				$data['title'] = isset($blog->seo_title) && $blog->seo_title ? $clean->clean(trim($blog->seo_title)) : "";
				$data['des'] = isset($blog->seo_description) && $blog->seo_description ? $clean->clean(trim($blog->seo_description)) : "";
				$data['key'] = isset($blog->seo_keywords) && $blog->seo_keywords ? $clean->clean(trim($blog->seo_keywords)) : "";
				$data['blogs_news'] = $blogs_news;
				$data['blogs_columns'] = $blogs_columns;
				if ($blog->article_type > 1 && $blog->article_columns) {
					return view('blogs.' . $blog->article_columns, $data);
				}
			}
		}
		return view('page404');
	}

	public function get_banners($ref_id = 0, $id = 0) {
		$data = [];
		$banners = $this->banners();
		if ($banners) {
            $ref_id = (int) $ref_id;
			if ($ref_id != 0) {
                $id = (int) $id;
				$data = isset($banners[$ref_id]) && $banners[$ref_id] ? $banners[$ref_id] : [];
                if($id != 0 && $data){
                    $data = isset($data[$id]) && $data[$id] ? $data[$id] : [];
                }
			} else {
                $data = $banners;
			}
		}
		return $data;
	}
    public function get_cover($id = 0) {
		$data = [];
		$cover = $this->cover($id);
		if ($cover) {
			if ($id == 0) {
				$data = $cover;
			} else {
				$id = (int) $id;
				if ($id > 0) {
					$data = $cover[$id] ? $cover[$id] : [];
				}
			}
		}
		return $data;
	}

	/*--------------------------------------private function--------------------------------------*/

	private function banners($ref_id = 0) {
		$id = (int) $ref_id;
		return cache()->remember('blog_banner', now()->addMinutes(60), function () use ($id) {
			$a = [];
			if ($id > 0) {
				$banners = article_banner::where('ref_article_id', $id)
					->orderBy('sort', 'asc')
					->get();
			} else {
				$banners = article_banner::orderBy('sort', 'asc')->get();
			}
			if ($banners) {
				foreach ($banners as $b) {
					$a[$b['ref_article_id']][$b['id']] = [
						'id' => $b['id'],
						'url' => '/blog/banner/' . $b['ref_article_id'] . '/' . $b['name'],
					];
				}
			}
			return $a;
		});
	}
    private function cover($id = 0) {
		$id = (int) $id;
		return cache()->remember('blog_cover', now()->addMinutes(60), function () use ($id) {
			$a = [];
			if ($id > 0) {
				$cover = article::where('id', $id)
					->orderBy('id', 'asc')
					->get();
			} else {
				$cover = article::orderBy('id', 'asc')->get();
			}
			if ($cover) {
				foreach ($cover as $c) {
					$a[$c['id']] = [
						'id' => $c['id'],
						'url' => '/blog/cover/' . $c['id'] . '/' . $c['cover_image'],
					];
				}
			}
			return $a;
		});
	}
}
