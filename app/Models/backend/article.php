<?php

namespace App\Models\backend;
use Illuminate\Database\Eloquent\Model;

class article extends Model {
	protected $table = 'article'; //กำหนดชื่อตารางที่ต้องการเรียกใช้
	protected $primaryKey = 'id'; //กำหนดชื่อตารางที่ต้องการเรียกใช้
	public $timestamps = false;
}