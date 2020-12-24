@extends('layout')
@section('contents')

    <div id='wrapper'>
        <div id='page' class='container'>
            <div id='content'>


                 {{-- dd($article); --}}

                <div class='title'>
                    <h2>{{ $article->title }}</h2>
                </div>
                 {{-- dd($article); --}}

                {{-- <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p> --}}
               {{--  {{ dd($article->getMedia('images')[0]->getFullUrl()) }}  --}}
                <p><img src={{ $article->getMedia('images')->first()->getFullUrl() }} alt="" class="image image-full" /> </p>
                {{ $article->body }}
                {{-- dd($article); --}}

                <h2>Comments</h2>
                <hr />
                @foreach ($article->comments as $comment)

                    <div class="display-comment">
                        <p>{{ $comment->body }}</p>
                        <div class="comment-list well well-lg">
                            <string>posted by {{ $comment->user->name }}</string>
                            <p class="muted">creat at: {{ $comment->created_at }}</p>
                            {{-- $role->pivot->created_at --}}


                            {{-- //like --}}
                            <div class="comment" stye = "margin:20px auto;position:relative;">
                                <div class="comment-top" stye = "background-color:#bfbfbf;line-height:30 px;margin-bottom:20px;"l></div>
                                <div class="likes" style="position:absolute; top:o; left:603px;">
                                    <div class="like" id="like" style="display:block;with:60 px" data-comment="{{ $comment->id }}" data-type="like">
                                        <img class="like-btn" src="/images/like1.jpg" style="with:16 px;height:16px;border:none;outline: none;cursor:pointer;float:left;margin:0 3px 2px 0; ">
                                        <span class="like_comment"
                                            style="display:none;padding:0 2px;height:16px;background-color:#EAEAEA;float:left;color:#090;"></span>
                                    </div>
                                    <div class="clearfix" ></div>
                                    <div class="dislike" id="dislike" data-id={{ $comment->id }}  style="with:16 px;height:16px;border:none;outline: none;cursor:pointer;float:left;margin:0 3px 2px 0; " data-type="dislike">
                                        <img class="dislike-btn" src="/images/index.png"   style="height:0;clear:both;">
                                        <span class="dislike_comment   style="padding:0 2px;height:16px;background-color:#EAEAEA;float:left;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>


                        @if($comment->replys)

                        @foreach ($comment->replys as $reply)

                        <div class="display-comment">
                            <p>{{ $reply->body }}</p>
                            <div class="comment-list well well-lg">
                                <string>posted by {{ $comment->user->name }}</string>




                        <hr />


                        <a href="#" id="reply"></a>
                        <h2>reply</h2>
                        <form method="post" action="{{ route('comments') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="body" class="form-control" />
                                <input type="hidden" name="article_id" value="{{ $article->id }}" />
                                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="py-0 btn btn-sm btn-outline-danger" style="font-size: 0.8em;"
                                    value="Reply" />
                            </div>
                        </form>
                    </div>

                        @endforeach

                        @endif



                @endforeach


                <hr />

                <h1>Add Comment</h1>
                <form method="post" action="{{ route('comments') }}">
                    @csrf

                    <div class="form-group">
                        {{-- <input type="text" name="body" class="form-control" />
                        --}}
                        <textarea class="form-control" name="body"></textarea>
                        <input type="hidden" name="article_id" value="{{ $article->id }}" />
                        {{-- <input type="hidden" name="parent_id" value="{{ $comment->id }}" /> --}}
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" value="Add Comment" />

                    </div>
                </form>

            </div>
        </div>
    </div>



     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    <script>
        $( document ).ready(function() {





                    // Save Like Or Dislike
                    $('#like').on('click', function(e) {
                        e.preventDefult();
                        var _comment = $(this).data('comment');
                        var _type = $(this).data('type');
                        var vm = $(this);
                        // Run Ajax
                        $.ajax({
                            url: "{{ route('commentlike') }}",
                            type: post ,
                            dataType: 'json',
                            data: {
                                comment: _comment,
                                type: _type,
                                _token: "{{ csrf_token() }}"
                            },
                            beforeSend: function() {
                                vm.addClass('disabled');
                            },
                            success: function(res) {
                                if (res.bool == true) {
                                    vm.removeClass('disabled').addClass('active');
                                    // vm.removeAttr('id');
                                    var _prevCount = $("." + _type + "-count").text();
                                    _prevCount++;
                                    $("." + _type + "-count").text(_prevCount);
                                }
                            }
                        });
                    });

                });

    </script>

@endsection
