<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ip2location;

class ContactNewController extends Controller {
	public function index() {
		$chkie = new Func_controller;
		$data['chkie'] = $chkie->chk();
		$data['des'] = 'if you are interested in polyester and recycled polyester product or you have any question do not hesitate to contact us.  we have a special offer for you!';
		$data['key'] = 'Sale office thaipolyester, textile yarns manufacturers, Yarn suppliers, Thailand Yarn manufacturers, Yarn factories';
		$data['title'] = 'Contact us | Thai Polyester CO., LTD';
		$data['active_contact'] = 'activemenu';

		$ajaxEncode = new AjaxEncode;
		$ip2location = new ip2location;

		$data['ncode'] = $ajaxEncode->getEncode();
		$data['countries'] = $ip2location->countries();

		return view('contact_new', $data);
	}
}
