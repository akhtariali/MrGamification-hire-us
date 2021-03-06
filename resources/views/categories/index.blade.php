@extends('layouts.app')
@section('title', 'Categories')

@section('main-content')
<head>
    <link rel="stylesheet" href="/css/style.css">
</head>
<div class="header-page">
    <div class="overlay-page"></div>
    <h1>CATEGORIES</h1>
</div>
@include('inc.messages')
<div class="content-page col-11 mx-auto mt-5 d-flex flex-wrap justify-content-center">
    @foreach ($categories as $category)
        <a href="/categories/{{$category->url}}" class="col-lg-4 type">
            <div class="overlay-effect">
                <h2 class="font-weight-normal">{{$category->category}}</h2>
            </div>

            <img src="/storage/images/{{$category->category_image}}"
                alt="" class="img img-fluid">
        </a>
        {{$categories->links()}}
    @endforeach
</div>

@endsection

<style>
    .header-page {
        background: url(https://images.unsplash.com/photo-1472141521881-95d0e87e2e39?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1952&q=80) center !important;
    }
    .type:nth-of-type(3n-1)  .overlay-effect {
        background: #fc4b1aa8 !important;
    }
</style>