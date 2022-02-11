<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\ServiceProvider;
use View;

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
		view()->composer("backend*", function ($view) {
			$view->with('auth', $this->getNameUser());
		});
	}
	private function getNameUser() {
		$name = Auth::guard('admin')->check() ? Auth::guard('admin')->user()->name : "";
		return $name;
	}
}
