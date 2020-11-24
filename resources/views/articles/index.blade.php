@extends('layout')
@section('contents')

<div id='wrapper'>
<div id='page' class='container'>


    <h1> <a href="/articles/create">Create Article</a></h1>
  <h2>List Articles</h2>

       @foreach($articles as $article)

             <div id="content">
                <div class="title">
                
                 {{-- <h2><a href="/articles/{{ $article->id }}">{{$article->title}}</a></h2> --}}
                  {{--  <h2><a href={{ route('articles.show', $article->id) }}>{{ $article->title }}</a></h2>  --}}
                    <h2>{{ $article->title }}</h2>
                </div>
                      <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                     
                 {{$article->excerpt}}
                 <br><br>
                

                 <h1>Comment</h1>
                 <hr/>
                 @forelse($article->comments as $comment)
                
           <h1>{{  $comment->title }}</h1>
           <div class="comment-list well well-lg">
           <p class = "muted">posted by {{ $comment->user->name }}  | creat at: {{ $comment->created_at }}</p>

           <div>
               {{ $comment->body }}
            </div>
        </div>
           <hr/>

           {{-- @incloud($loop->last); --}}
           @empty
           <p>not existing  comment</p>
             
          @endforelse

  @endforeach

</div>
</div>
</div>
@endsection
