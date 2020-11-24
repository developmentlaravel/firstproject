
@extends('layout')


@section('contents')

{{-- dd('hello'); --}}
     <div id="wrapper">
        <div id="page" class="container">

            
                 
            <div id="content">

                @foreach($articles as $article)
                        <div class="title">
                <h2><a href={{ route('listarticles.show', $article->id) }}>{{$article->title}}</a></h2>
                    {{-- <!-- <h2><a href="{{rout('article.show')}}">{{articles->title}}</a></h2> --> --}}

                <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
                {{ $article->body }}
                 </div>
                 @endforeach

                 
                 
              
            {{--  </div>
                 <div id="sidebar">
                <ul class="style1">
                    <li class="first">
                        <h3>Amet sed volutpat mauris</h3>
                        <p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
                    </li>
                    <li>
                        <h3>Sagittis diam dolor sit amet</h3>
                        <p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
                    </li>
                    <li>
                        <h3>Maecenas ac quam risus</h3>
                        <p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
                    </li>
                </ul>
                <div id="stwo-col">
                    <div class="sbox1">
                        <h2>Etiam rhoncus</h2>
                        <ul class="style2">
                            <li><a href="#">Semper quis egetmi dolore</a></li>
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare hendrerit lectus</a></li>
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                        </ul>
                    </div>
                    <div class="sbox2">
                        <h2>Integer gravida</h2>
                        <ul class="style2">
                            <li><a href="#">Semper quis egetmi dolore</a></li>
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Consequat lorem phasellus</a></li>
                            <li><a href="#">Amet turpis feugiat amet</a></li>
                        </ul>
                    </div>
                </div>  --}}
            </div>
  
        </div>
    </div>
@endsection

