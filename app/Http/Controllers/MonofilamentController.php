<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ip2location;
use Jenssegers\Agent\Agent;

class MonofilamentController extends Controller {
	public function index() {
		$chkie = new Func_controller;
		$data['chkie'] = $chkie->chk();
		$agent = new Agent();
		$data['des'] = 'Monofilament is also known as single polyester yarns, mother yarn for splitting. Mono filament yarn has soft touch and good physical properties';
		$data['key'] = 'Monofilament, Standard Monofilament, best Monofilament, Produce cheap Monofilament';
		$data['title'] = 'Monofilament | Thai Polyester CO., LTD';
		$data['active_product'] = 'activemenu';
		$data['chkmobile'] = $agent->isMobile() ? $agent->isMobile() : ($agent->isTablet() ? $agent->isTablet() : false);

		$ajaxEncode = new AjaxEncode;
		$ip2location = new ip2location;

		$data['ncode'] = $ajaxEncode->getEncode();
		$data['countries'] = $ip2location->countries();

		return view('products.monofilament', $data);
	}
}