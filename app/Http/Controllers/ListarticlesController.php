<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;



class ListarticlesController extends Controller
{


   public function index()
    {

       $article = Article::orderBy('created_at', 'ASC')->get();
    //    dd($article);
       return view('listarticles.welcome' ,['articles' => $article]);
   }

   public function show($id)
   {
// dd($id);

      $articleitem = Article::findOrFail($id);

      $article = $articleitem->getMedia('images');
    //   dd($article);

      $article =  $article[0]->name  ;
    //   $article->save();

      
      dd($article);

      $comments = Comment::where([
          ['article_id', '=', $id],
          ['parent_id', '=', 0 ]
      ])->with('replys')->get();
    //   dd($comments);
    //  $article = $article->comments;

    // dd($article);
    //   dd($comment);
    // $article = $article->comments;
    // dd($article);
    return view('listarticles.show',['article'=>$article]);
}






}
