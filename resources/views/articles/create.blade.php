

@extends('layout')

@section('contents')

<div class='wrapper'>
<div id='page' class='container'>

    @if($message = Session::get('succes') )
    
        <div class = "alert alert-succes alert-blo">
            {{--  <button class = "close">close</button>  --}}
            <storag>{{  $message }}</storag>
        
        </div>
   
    @endif

    <form  method="POST" action="/articles" enctype="multipart/form-data">
        @csrf

             <div class="field">
                 <label class="label" for="title">Title</label>
                 <div class="control">
                 <input class="input @error('title') is-invalid  @enderror" type="text" name="title" id="title" value="">
            @error('title')
            <p class="help is-danger">{{ $message }}</p>@enderror
                </div></div>
        <div class="field">
                 <label class="label" for="excerpt">Excerpt</label>
                 <div class="control">
                 <textarea class="textarea @error('excerpt') is-invalid  @enderror" type="text" name="excerpt" id="excerpt"></textarea>
                 @error('excerpt')
                 <p class="help is-danger">{{ $message }}</p>@enderror
                 </div></div>
        <div class="field">
                 <label class="label" for="body">Body</label>
                <div class="control">
                 <textarea class="textarea @error('body') is-invalid  @enderror" type="text" name="body" id="body" ></textarea>
                 @error('body')
                 <p class="help is-danger">{{ $message }}</p>@enderror
                 </div></div>
                 <div class="field">
                    <label class="label" for="file">Uploadfile</label>
                    <div class="control">
                    <input class="input @error('image') is-danger @enderror" type="file" name="image" id="image" >
                    @error('image')
                    <p class="help is-danger">{{ $message }}</p>@enderror
                </div></div>
        <div class="field is-group">
            <div class="control">
                 <button type="submit" class="bottun is-link"> submit </button>
             </div></div>

    </form>
    </div>
    </div>
@endsection
