<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class frontendcontroller extends Controller
{
    public function post_rating(Request $request){


        Session::flash('status','Submitted');

        return redirect()->back();
    }
}
