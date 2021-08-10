<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class fileUploadController extends Controller
{

    public function fileUpload(Request $req){

      $date=date("d-M-Y");

 
       $title=  $req->input('title');
      $file=$req->file('file')->store('public');
      $result=DB::table('download')->insert([
        'date'=>$date,
        'file_name'=>$file,
        'title'=>$title
      ]);
      
      if ($result==true) {

         return 1;
      }else
      {
        return 0;
      }

    }

        public function view(){
         return view("welcome");
    }
    

}
