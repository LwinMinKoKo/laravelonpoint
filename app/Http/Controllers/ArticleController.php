<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // create new exercisecode
        public function index()
        {
            $data= Article::all();
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

        public function add()
        {
            $data = [
                    [ "id" => 1, "name" => "News" ],
                    [ "id" => 2, "name" => "Tech" ],
                    ];
            return view('articles.add', ['categories' => $data]);

        }


        public function create()
        {
            $validator=validator(request()->all(),[
                'title'=>'required',
                'Body'=>'required',
                'category_id'=>'required'
            ]);
            if($validator->fails()){
                return back()->withErrors($validator);
            }
            $article = new Article;
            $article->title = request()->title;
            $article->body = request()->body;
            $article->categeory_id = request()->categeory_id;
            $article->save();
            return redirect('/articles');
        }

        public function delete($id)
        {
            $article=Article::find($id);
            $article->delete();
            // return redirect('/articles')->with('info','Items was deleted');
        }

        public function __construct()
        {
            $this->middleware('auth')->except(['index','detail']);
        }
}