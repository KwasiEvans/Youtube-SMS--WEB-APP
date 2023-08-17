<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function registerMember(){
        return view('pages.registerMember');
    }
}
