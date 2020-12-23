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

        $request->request->add(['user_id' => auth()->id()]);
        // $this->validateArticles();
        $articles = new Article;



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

        $article->title = request('title');
        $article->excerpt = request('excerpt');

        $article->body = request('body');
        $article->user_id = auth()->id();

        // dd($article);


        $article->save();
     
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


    protected function validateArticles()
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:1250'
        ]);
    }
}
