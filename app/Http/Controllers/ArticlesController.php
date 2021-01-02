<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreCommentsRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class ArticlesController extends Controller
{



    public function index()
    {




        // dd(Article::where('user_id', auth()->id())->first());
        // dd(Article::where('user_id', auth()->id())->first()->getMedia('images'));
        // dd(Article::first());
        // $article = Article::where('user_id',auth()->id())->with('comments')->get();
        // dd(Article::orderBy('created_at', 'ASC')->get());
        return view('articles.index', ['articles' => Article::where('user_id', auth()->id())->with('comments')->get()]);

        //   return view('articles.index', ['articles' => Article::orderBy('created_at', 'ASC')->get()]);
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
                'excerpt',
                'body',
                'user_id'
            ]
        ));

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
        // $image = $request->file('image');
        // // dd($request->file('image'));
        // foreach($request->file('image') as $image){
        //  $articles->addMultipleMediaFromRequest('images')->toMediaCollection('images');
        // }

        // $adders = collect($request->file('image'));
        // dd($adders);

        //  foreach($request->file('image', []) as $image){
        //     //  dd($image);
        //     $media = $articles->addMedia('image');
        //     // $media = $articles->addMedia(['image']);
        //     // dd($media);
        // }
        // // dd($articles);
        // $article =  $media->toMediaCollection('images');

        // dd($article);
        // dd($request->hasFile('image'));


        if($request->hasFile('image')){
        $files = $articles->addMultipleMediaFromRequest(['image'])->each(function ($file){
            // dd($files);
            $file->toMediaCollection('images');
        });

        }









        // if($request->hasFile('image')){
        //     // dd($request->hasFile('image'));
        //     $articleadders = $articles->addMultipleMediaFromRequest('articleadder')->toMediaCollection('images');
        // // dd($articleadders);
        // }

//    dd($articleadders);








        // $article = $articles->addMultipleMediaFromRequest($adders)->toMediaCollection('images');
        // dd($article);

        // $images = $request->file('image', []);
        // dd($images);
        // $images = $articles->each(function ($image){
        //     //  dd($image);
        //     article = $articles->addMultipleMediaFromRequest($image)->toMediaCollection('images');
        //     // dd($article);
        // });

        // $article

        // dd($article);
        // dd($request->file(['image']));
        // $article = $articles->addMultipleMediaFromRequest($request->file('image'))->toMediaCollection('images');

        // $adders = collect($articles->addMultipleMediaFromRequest($request->file('image')));
        // $adders->each(function ($adder){


        //     $articles->each(function ($articl){
        //         $article = $articl->addMultipleMediaFromRequest('image')->toMediaCollection('images');
        // });


        // $images = $request->file('image');
        // // dd($images);
        // foreach ($images as $image) {
        //     // dd($image);
        //    $article = $articles->addMultipleMediaFromRequest('image')->toMediaCollection('images');
        // }





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
