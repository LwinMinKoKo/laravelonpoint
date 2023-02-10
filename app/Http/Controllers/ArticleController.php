<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // create new exercisecode
        public function index()
        {
            $data= Article::latest()->paginate(3);
            return view('articles.index',[
                'articles'=>$data
            ]);
        }

        public function details($id)
        {
           $data=Article::find($id);
           return view ('articles.details',[
            'articles'=>$data
           ]);
           
        }
}