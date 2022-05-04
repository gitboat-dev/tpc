<?php

namespace App\Http\Controllers\images\blog;

use App\Http\Controllers\Controller;

// use App\Models\backend\article;
// use App\Models\backend\article_banner;
// use DB;
// use File;
// use Illuminate\Http\Request;
// use Image;
// use Log;
// use Validator;
use File;

class blogImageController extends Controller {
	public function banner($id, $name, $ext) {
		$id = (int) $id;
		$ext = trim($ext);
		if ($id > 0) {
			$file = $name . "." . $ext;
			$path = storage_path('blog/images/' . $id . '/banner/' . $file);
			if (File::exists($path)) {
				$mime = mime_content_type($path);
				$allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
				if (in_array($mime, $allowed)) {
					return response()->file($path);
				}
			}
		}
	}
	public function cover($id, $name, $ext) {
		$id = (int) $id;
		$ext = trim($ext);
		if ($id > 0) {
			$file = $name . "." . $ext;
			$path = storage_path('blog/images/' . $id . '/cover/' . $file);
			if (File::exists($path)) {
				$mime = mime_content_type($path);
				$allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
				if (in_array($mime, $allowed)) {
					return response()->file($path);
				}
			}
		}
	}
	public function gallery($id, $name, $ext) {
		$id = (int) $id;
		$ext = trim($ext);
		if ($id > 0) {
			$file = $name . "." . $ext;
			$path = storage_path('blog/images/' . $id . '/image/' . $file);
			if (File::exists($path)) {
				$mime = mime_content_type($path);
				$allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
				if (in_array($mime, $allowed)) {
					return response()->file($path);
				}
			}
		}
	}
}
