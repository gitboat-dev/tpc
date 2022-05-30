<?php

namespace App\Models\pdpa;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pdpa_cookie extends Model {
    use SoftDeletes;
	protected $connection = 'pdpa';
	protected $table = 'cookie';
	public $timestamps = false;
}
