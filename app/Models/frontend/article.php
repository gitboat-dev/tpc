<?php

namespace App\Models\frontend;
use App\Scopes\articleScope;
use Illuminate\Database\Eloquent\Model;

class article extends Model {
	protected $table = 'article'; //กำหนดชื่อตารางที่ต้องการเรียกใช้
	protected $primaryKey = 'id'; //กำหนดชื่อตารางที่ต้องการเรียกใช้
	public $timestamps = false;

	protected static function boot() {
		parent::boot();
		static::addGlobalScope(new articleScope);
	}
}