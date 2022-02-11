<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ip2location extends Controller
{
    public function countries()
    {
        $a=[];
        $rows = DB::connection('ip2location')->table('countries')->orderBy('country_code','asc')->get();
        if($rows){
            foreach ($rows as $rs) {
                $a[]=[
                    'id' => $rs->id,
                    'code' => $rs->country_code,
                    'name' => $rs->country_name
                ];
            }
        }

        return $a;
    }
}

