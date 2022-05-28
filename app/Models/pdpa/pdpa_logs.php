<?php

namespace App\Models\pdpa;

use Illuminate\Database\Eloquent\Model;

class pdpa_logs extends Model {
	protected $connection = 'pdpa';
	protected $table = 'logs';
	public $timestamps = false;
}
