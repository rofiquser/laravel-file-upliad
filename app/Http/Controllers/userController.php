<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    public function view(){
        return view('user.notice');
    }
      public function getData(){

        $allData=DB::table('download')->get();
           return $allData;

            }

            public function download($folderPath,$fileName){
                // $end=end($fileName);
                // // $extention=explode(".", $fileName);
                // dd($end);
                return Storage::download($folderPath."/".$fileName,"bdcalling.pdf");
            }
    
}
