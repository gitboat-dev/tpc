<?php

namespace App\Http\Controllers\backend\dashboard;

use App\Http\Controllers\Controller;

// use Validator;
// use Illuminate\Http\Request;

class dashboardController extends Controller {
	public function __construct() {
		$this->middleware('admin');
	}
	public function index() {
		$data = [];
		return view('backend.dashboard.index', $data);
	}
}