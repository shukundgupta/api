<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Wap;

class getdata_controller extends Controller
{
    public function result(){
        Wap::all();
    }
}
