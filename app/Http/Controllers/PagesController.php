<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $title=array(
            'title'=>'About us'
        );
        return view('pages.about')->with($title);
    }
}
