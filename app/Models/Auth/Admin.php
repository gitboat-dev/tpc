<?php

namespace App\Models\Auth;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable {
	use Notifiable;

	protected $guard = 'admin';
	protected $table = 'admin';

	protected $fillable = [
		'name', 'email', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];
}