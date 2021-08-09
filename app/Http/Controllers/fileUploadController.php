<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUploadController extends Controller
{

    public function fileUpload(Request $req){

      $result=$req->file('file')->store('images');
      return $result;

    }

        public function view(){
         return view("welcome");
    }
    

}
