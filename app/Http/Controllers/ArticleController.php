<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // public function index()
    // {
    //     $data=[
    //         ["id"=>1,"title"=>"First Article"],
    //         ["id"=>2,"title"=>"Second Article"]
    //     ];
    //     return view('articles.index',['articles'=> $data]);    
    // }

    // public function details($id)
    // {
    //     return "Controller  - $id";
    // }



    // create new exercisecode
        public function index()
        {
            $data=Article::all();
            return view('articles.index', [
                'articles' => $data
                ]);
            
            // return view('articles.index',[
            //     'articles'=>$data]);    

            // echo "Hello from Article Controller";
            // return view ("articles.index");
            // echo $data;
        }

        // public function detail($id)
        // {
        //     return " controller Article - $id";
        // }
}
