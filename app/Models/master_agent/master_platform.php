<?php

namespace App\Models\master_agent;

use Illuminate\Database\Eloquent\Model;

class master_platform extends Model {
	protected $connection = 'master_agent';
	protected $table = 'platform';
	public $timestamps = false;
}
