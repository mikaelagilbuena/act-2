<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
   public function Talk(){
       return view('blogs.index');
   }

   public function Save(Request $r){
        $title = Request()->input('title');
        $content = Request()->input('content');
        $post = ['title'=>$title, 'content'=>$content];
        return view('blogs.save', ['post'=>$post]);
    }
}
