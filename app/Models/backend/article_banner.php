<?php

namespace App\Models\backend;
use Illuminate\Database\Eloquent\Model;

class article_banner extends Model {
	protected $table = 'article_banner'; //กำหนดชื่อตารางที่ต้องการเรียกใช้
	protected $primaryKey = 'id'; //กำหนดชื่อตารางที่ต้องการเรียกใช้
	public $timestamps = false;
}