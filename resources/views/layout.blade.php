<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="{{ asset('css/default.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" />


    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>




    {{-- <div class="relative flex justify-center min-h-screen bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
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
        </div> --}}


{{-- <div class="container">
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


<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="#">SimpleWork</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{request()->Path() === '/'? 'current_page_item':''}}"><a href="#" accesskey="1" title="">Homepage</a></li>
                <li class="{{request()->Path() === 'articles'? 'current_page_item':''}}"><a href="/articles" accesskey="2" title="">ARTICLES</a></li>
                <li class="{{request()->Path() === 'about'? 'current_page_item':''}}"><a href="about" accesskey="3" title="">About Us</a></li>
                <li class="{{request()->Path() === '/articles/create'? 'current_page_item':''}}"><a href="/articles/create" accesskey="4" title="">CREATE ARTICLE</a></li>
                <li class="{{request()->Path() === '/'? 'current_page_item':''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                <h2>Maecenas luctus lectus</h2>
                <p>This is <strong>SimpleWork</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
                <a href="#" class="button">Etiam posuere</a> </div>
        </div>
    </div>
</div>
@yield('contents')

 <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>

<div id="copyright" class="container">
    <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
