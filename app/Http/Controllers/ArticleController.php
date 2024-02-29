<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  

    public function index(Request $request)
    {
        if($request->filled('search')){

            $articles = Article::search($request->search)->get();
        }else{
            $articles = Article::select("id","title","content")->get();
        }
     
        return view('articles',compact('articles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Article::create([
        //     'title' => [
        //         'en' => $request->name,
        //         'ar' =>$request->name
        //     ],
        //     'content' => [
        //         'en' => $request->content,
        //         'ar' =>$request->content
        //     ],
         
        // ]);
        Article::create([
            'title' => $request->name,
            'content' => $request->content,

         
        ]);

        return redirect()->route('articles.index')->with('success', 'User created successfully');
    }
}
