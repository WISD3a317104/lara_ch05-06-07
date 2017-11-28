<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BoardController extends Controller
{
    public function getIndex(){
        return view('board');
    }
    public function getName(){
        return Route::currentRouteAction();
    }
}
