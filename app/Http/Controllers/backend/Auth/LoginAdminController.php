<?php

namespace App\Http\Controllers\backend\Auth;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;

class LoginAdminController extends Controller {
	use AuthenticatesUsers;
	protected $guard = 'admin';
	protected $redirectTo = 'backoffice/blog';
	public function index() {
		if (Auth::guard('admin')->check()) {
			return redirect($this->redirectTo);
		} else {
			return view('backend.Auth.form');
		}
	}
	public function login(Request $request) {
		$user = [];
		$msg = [];
		$validator = Validator::make($request->all(), [
			'email' => 'required|string|email|max:255',
			'password' => 'required|string|alphaNum|min:3|max:255',
		]);
		if ($validator->fails()) {
			$msg['failed'][] = 'กรุณากรอกข้อมูลให้ครบถ้วน';
			return redirect()
				->route('backoffice.form')
				->withErrors($msg)
				->withInput();
		}
		$user['email'] = $request->get('email');
		$user['password'] = $request->get('password');
		$user['active'] = 1;
		if (Auth::guard('admin')->attempt($user)) {
			return redirect($this->redirectTo);
		} else {
			$active = DB::table('admin')
				->where('email', $request->get('email'))
				->first();
			if ($active) {
				$active = $active->active;
				if ($active) {
					$msg['email'][] = 'These credentials do not match our records.';
				} else {
					$msg['email'][] = 'Your account has been disabled.';
				}
			} else {
				$msg['email'][] = 'These credentials do not match our records.';
			}
			return redirect()
				->route('backoffice.form')
				->withErrors($msg)
				->withInput();
		}
	}
	public function logout() {
		Auth::guard('admin')->logout();
		return redirect('/backoffice');
	}
}