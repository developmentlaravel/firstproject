<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreCommentsRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Comment;
use App\Models\Article;
use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Fasaded\Auth;



class CommentsController extends Controller
{

    public function store(Request $request)
    {


        //  if($request->has('parent_id')>0){
        // dd($request->all());
        $request->request->add(['user_id' => auth()->id()]);
        $comment = Comment::create($request->only(['body', 'user_id', 'parent_id', 'article_id']));

        // dd($comment->user_id);
        // $article = new Article;
        // $article->comments()->save($comment);
        // return redirect()->route('listarticles.show',$request->input('article_id') );
        return redirect()->route('listarticles.show', $request->input('article_id'));
    }





    public function like(Request $request)

    {

        $comment = Comment::find($request->input('comment_id'));
        $comment->like->create(['user_id' => auth()->id])->increment('comment.like_comment')->get();

        return response()->json([
            'bool' => true
        ]);
    }

    public function dislike(Request $request)
    {

        // $comment = Comment::with('comment.comment_user')->decrement('comment.likes_comment');
        // return view('listarticles.show' , ['comment' => $comment]);
        $comment = Comment::find($request->input('comment_id'));
        $comment->like->create(['user_id' => auth()->id])->decrement('comment.dislike_comment')->get();

        return response()->json([
            'bool' => false
        ]);
    }
}
// protected function validateArticles(){
//     request()->validate([
//         'body'=> 'required',
//         ]);
// }


    // function save_likedislike(Request $request)
    // {
    //     $data=new LikeDislike;
    //     $data->comment_id=$request->comment;
    //     if($request->type=='like'){
    //         $data->like=1;
    //     }else{
    //         $data->dislike=1;
    //     }
    //     $data->save();F
    //     return response()->json([
    //         'bool'=>true
    //     ]);
    // }










    // vueeeeeeeee//
    // public function likeComment(Comment $comment)
    // {
    //     Auth()->user()->likes->attach('comment_id');
    //     return back();
    // }

    // public function disLikeComment(Comment $comment)
    // {
    //     Auth()->user()->likes->dettach('comment_id');
    //     return back();
    // }
    // // public function myLikes(){

    // //     $myLikes = auth()->user()->likes;
    // //     return view('comments' , compact('myLikes'));
    // // }
    // public function liked()
    // {
    //     return (bool) Like::where('user_id', auth()->id())
    //                         ->where('comment_id', $this->id)
    //                         ->first();
    // }




    // function save_likedislike(Request $request){
    //     $data=new LikeDislike;
    //     $data->comment_id=$request->comment;
    //     if($request->type=='like'){
    //         $data->like=1;
    //     }else{
    //         $data->dislike=1;
    //     }
    //     $data->save();
    //     return response()->json([
    //         'bool'=>true
    //     ]);
    // }
