<?php

namespace app\Http\Controllers\frontend\clean;

use App\Http\Controllers\Controller;

class cleanController extends Controller {
	public function clean($str, $strip = 1) {
		$res = null;
		if (is_array($str)) {
			$res = array();
			foreach ($str as $k => $rs) {
				$res[$k] = clean($rs);
			}
		} elseif ($str != '') {
			$res = clean($str);
			if ($strip == 1) {
				$res = strip_tags($res);
			}
		}
		return $res;
	}
}
