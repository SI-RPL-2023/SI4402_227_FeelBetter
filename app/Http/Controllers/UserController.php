<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        return view('pages.front-end.profile');
    }
}
