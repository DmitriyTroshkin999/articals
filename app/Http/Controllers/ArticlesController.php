<?php

namespace App\Http\Controllers;

use App\Models\Articles;


class ArticlesController extends Controller
{
    /**
     * Главная страница.
     */
    public function index(){
        $articles = Articles::orderBy('id', 'desc')
            ->take(6)
            ->get();

        return view('pages.index',[
            'articles' => $articles
        ]);
    }

    public function allArticles(){
        $articles = Articles::orderBy('id','desc')->paginate(10);

        foreach ($articles as $article){
            $tags[$article->id] = Articles::find($article->id)->tags()->get();
        }

        return view('pages.articles',[
            'articles' => $articles,
            'tags' => $tags
        ]);
    }
    /**
     * Одна статья.
     */
    public function oneArticle($slug){
        $article = Articles::where('slug',$slug)->first();
        $tags = Articles::find($article->id)->tags()->get();

        return view('pages.onearticle',[
            'article' => $article,
            'tags' => $tags
        ]);
    }


}
