<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Send_email_controller extends Controller
{
    public function expAjaxPost($data){
        $data = urldecode(hex2bin($data));
        return explode(config('setting')['ajax-encode'], $data);
    }

       public function send(Request $request)
    {
       // dd(ip2long(request()->ip()));
  //       $data = $this->input->post('data');
		// $expData = $this->expAjaxPost($data);
		// dd($expData);
		// $a['fname'] = addslashes(trim($expData[0]));
		// $a['lname'] = addslashes(trim($expData[1]));
		// $a['tel'] = addslashes(trim($expData[2]));
		// $a['topic'] = addslashes(trim($expData[3]));
		// $a['mail'] = addslashes(trim($expData[4]));
		// $a['description'] = addslashes(trim($expData[5]));
		// echo json_encode($a['mail']); 

    
            //get the form data
        

        	$data = array(
        		'active' => 1,
        		'contact_status' => 1,
        		'contact_name' => $request->input('name_a'),
        		'contact_email' => $request->input('email_a'),
        		'contact_tel' => $request->input('phone_a'),
        		'contact_company' => $request->input('company_a'),
        		'contact_header' => $request->input('subject_a'),
        		'contact_detail' =>$request->input('message_a'),
        		'contact_created_at_ip' =>ip2long(request()->ip()),
        		'created_at' =>  date('Y-m-d H:i:s'),
        		'updated_at' =>  date('Y-m-d H:i:s'),
        	);

        	$insert =DB::table('ecom_contract')->insert($data);
 

        	if (($insert))
        	{
                // mail sent
        		echo "YES";
        	}
        	else
        	{
                //error
        		echo "NO";
        	}
    
        	
    }

       public function footersend(Request $request)
    {
       // dd(ip2long(request()->ip()));
  //      $data = $this->input->post('data');
        // $expData = $this->expAjaxPost($data);
        
        // $a['fname'] = addslashes(trim($expData[0]));
        // $a['lname'] = addslashes(trim($expData[1]));
        // $a['tel'] = addslashes(trim($expData[2]));
        // $a['topic'] = addslashes(trim($expData[3]));
        // $a['mail'] = addslashes(trim($expData[4]));
        // $a['description'] = addslashes(trim($expData[5]));
        // echo json_encode($a['mail']); 

    
            //get the form data
        

            $data = array(
                'active' => 1,
                'contact_status' => 1,
                'contact_name' => $request->input('name_a'),
                'contact_email' => $request->input('email_a'),
                'contact_tel' => $request->input('phone_a'),
                'contact_company' => $request->input('company_a'),
                'contact_header' => $request->input('subject_a'),
                'contact_detail' =>$request->input('message_a'),
                'contact_created_at_ip' =>ip2long(request()->ip()),
                'created_at' =>  date('Y-m-d H:i:s'),
                'updated_at' =>  date('Y-m-d H:i:s'),
            );

            $insert =DB::table('ecom_contract')->insert($data);
 

            if (($insert))
            {
                // mail sent
                echo "YES";
            }
            else
            {
                //error
                echo "NO";
            }
    
            
    }







}

