<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class SendMailController extends Controller
{
    public function get_lienhe(){
    	return view('page.lien_he');
    }
     public function post_lienhe(){
    	$data=['hoten'=>'Nguyễn Trọng Sang'];
    	Mail::send('page.blank',$data,function($message){
    		$message->from('trongsangnguyen1997@gmail.com','Sang Nguyễn');
    		$message->to('trongsangnguyen1997@gmail.com','Sang Nguyễn');
            $message->subject('Đây là mail được gửi');
    	});
    }
}
