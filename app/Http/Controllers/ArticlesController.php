<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreCommentsRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{


    public function index()
    {


        // $article = Article::where('user_id',auth()->id())->with('comments')->get();
        // dd($article);
        return view('articles.index', ['articles' => Article::where('user_id', auth()->id())->with('comments')->get()]);
    }

    public function store(StoreCommentsRequest $request)
    {

        // dd($request->file('image'));
// dd($request);
        $request->request->add(['user_id' => auth()->id()]);
        // $articles = new Article;
// dd(new Article);

// $articles = Article::create($request(['title' , 'excerpt', 'body']));

        //  $articles = Article::create(
        //  [
        //      'title' => $request('title'),
        //      'excerpt' => $request('excerpt'),
        //      'body' => $request('body')
        //  ]);

        $articles = Article::create($request->only(
             [
                 'title',
                 'excerpt' ,
                 'body' ,
                 'user_id'
             ]));

            //  $articles = Article::create($request(
            //     [
            //         'title' => input('title'),
            //         'excerpt' => input('excerpt'),
            //         'body'=> input('body') ,
            //         'user_id' => input('body')
            //     ]));



        // $image = request('image');
        // $imagename = time(). '.' . $request->image->getClientOrginalName();
        // $request->image->move(public_path('images'),$imagename);

        // $article->addFromMediaLibraryRequest(request(), 'image')->toMediaCollection('images');


        // $imagename = $request->file('image')->getClientOriginalName();
        // $extension = $request->file('image')->extension();
        // $request->image->move(public_path('images'),$imagename);
        $article = $articles->addMediaFromRequest('image')->toMediaCollection('images');

        // $article->addMediaFromRequest('C:\Users\DELL\Desktop\images\download (1).jpg')->toMediaCollection('avator');

        // $path = $request
        // dd($article);




        // $article->title = request('title');

        // $article->excerpt = request('excerpt');

        // $article->body = request('body');
        // $article->user_id = auth()->id();

        // dd($article);

        // dd($article->get());
        // $article->save();
// dd($article);
        return back()->with('succes', 'you have succesfully upload image');
        // ->with('image', 'image');
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


    // protected function validateArticles()
    // {
    //     request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required',
    //         'image' => 'required|image|mimes:jpg,jpeg,png|max:1250'
    //     ]);
    // }
}
