<!--


@extends('layout')


@section('contents')

    <div id="wrapper">
        <div id="page" class="container">

        @foreach('$articles as article')
            <div id="content">
                <div class="title">
                    <h2><a href="{{rout('article.show'),$article}}">{{articles->title}}</a></h2>
                    <!-- <span class="byline">Mauris vulputate dolor sit amet nibh</span> </div> -->
                <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>

                 </div>
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
                </div>
            </div>
        </div>
    </div>
@endsection

























{{--
<html>
   <body class="antialiased">--}} --}}
{{--        <div class="relative flex justify-center min-h-screen bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">--}}
{{--                    @auth--}}
                       {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> --}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            @endif--}}

{{--    </body>
{{-- {{--</html> --}}



{{--

 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}









 {{-- <html>
   <body class="antialiased">
       <div class="relative flex justify-center min-h-screen bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
           @if (Route::has('login'))
               <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                    @auth
                       <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                   @else
                       <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                       @if (Route::has('register'))
                           <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                       @endif
                   @endif
               </div>
           @endif

   </body> --}}
