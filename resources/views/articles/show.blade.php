@extends('layout')
@section('contents')

<div id='wrapper'>
<div id='page' class='container'>

   <div id='content'>
           <div class='title'>

              <h2>{{$article->title}}</h2>
 </div>
 {{--  <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>  --}}
 <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p> 
 {{$article->body}}

 </div>

@endsection
