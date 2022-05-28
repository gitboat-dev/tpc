<?php

namespace App\Models\pdpa;

use Illuminate\Database\Eloquent\Model;

class pdpa_cookie extends Model {
	protected $connection = 'pdpa';
	protected $table = 'cookie';
	public $timestamps = false;
}
