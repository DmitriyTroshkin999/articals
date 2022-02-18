<?php

namespace App\Http\Controllers;

use App\Models\Articles;

class AjaxController extends Controller
{
    /*
     * Инкремент просмотра статьи
     */
    public function incrementView($id){
        $article = Articles::find($id);
        $article->increment('views');

        return response()->json($article->views);
    }

    /*
     * Инкремент лайка статьи
     */
    public function incrementLike($id){
        $article = Articles::find($id);
        $article->increment('likes');

        return response()->json($article->likes);
    }
}
