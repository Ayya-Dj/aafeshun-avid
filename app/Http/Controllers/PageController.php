<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Helper\Helper;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function products() {
        return view('products');
    }

    public function about() {
        return view('about');
    }

    public function gallery() {
        return view('gallery');
    }
}
