<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\ServiceProvider;
use View;
use App\Http\Controllers\pdpa\CookieController;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
        // $pdpa = new CookieController;
        // $pdpa_check = $pdpa->check(1);
        // View::share('pdpa_check', $pdpa_check);
		view()->composer("backend*", function ($view) {
			$view->with('auth', $this->getNameUser());
		});
	}
	private function getNameUser() {
		$name = Auth::guard('admin')->check() ? Auth::guard('admin')->user()->name : "";
		return $name;
	}
}
