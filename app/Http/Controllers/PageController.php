<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

        $produto = \DB::table('produtos')->get();

        return view('home')->with('produtos', $produto);
    }
}
