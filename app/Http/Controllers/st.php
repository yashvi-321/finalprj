<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class st extends Controller
{
    public function getstudents()
    {
         $s=DB::table('students')->get();
        return $s;
}   public function getstudent($id)
{
     $s=DB::table('students')->where('id','=',$id)->first();
    return $s;
}   
}
