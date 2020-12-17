<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreCommentsRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Http\UploadedFile;

class ArticlesController extends Controller
{


    public function index()
    {


        // $article = Article::where('user_id',auth()->id())->with('comments')->get();
// dd($article);
        return view('articles.index',['articles'=> Article::where('user_id',auth()->id())->with('comments')->get()]);
    }

    public function store(StoreCommentsRequest $request)
    {


        $request->request->add(['user_id'=>auth()->id()]) ;
        $this->validateArticles();
    $article = new Article;

    // $image = request('image');
    // $imagename = time(). '.' . $request->image->getClientOrginalName();
    // $request->image->move(public_path('images'),$imagename);
    $imagename = $request->file('image')->getClientOriginalName();
    $extension = $request->file('image')->extension();
    $request->image->move(public_path('images'),$imagename);
    // $path = $request


    $article->title = request('title');
    $article->excerpt = request('excerpt');
    $article->body = request('body');
    $article->user_id = auth()->id();
    $article->save();
    return back()->with('succes','you have succesfully upload image' )->with('image',$imagename);


    }
//     public function show($id){

// // dd($id);
//         //  $article = Article::findOrFail($id);

//          return view('articles.show',['article'=>Article::findOrFail($id)]);
//     }

    public function create()
    {
        return view('articles.create');
    }


    protected function validateArticles(){
        request()->validate([
            'title'=>'required' ,
            'excerpt'=> 'required',
            'body'=> 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:1250'
            ]);
}
}
