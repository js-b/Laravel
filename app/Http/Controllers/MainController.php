<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function review(){
        return view('review');
    }
    public function review_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:5|max:100',
            'subject' => 'required|min:5|max:100',
            'messagee' => 'required|min:15|max:500'
        ]);
    }
}
