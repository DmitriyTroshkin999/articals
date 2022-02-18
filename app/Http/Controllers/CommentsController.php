<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends Controller
{
    /*
     * Сохранение комментария
     */
    public function comment(Request $request, $slug){

        if ($request->isMethod('post')) {
            // валидация формы
            $request->validate([
                'subject' => 'required|max:255',
                'body'  => 'required'
            ]);
            $subject = $request->input('subject');
            $body = $request->input('body');
            Comments::insert(['articles_id' => $slug ,'subject' => $subject,'body' => $body , 'created_at' => now(),'updated_at' => now ()]);

            return view('pages.thankyou');
        }
    }
}
