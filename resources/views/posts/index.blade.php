@extends('layouts.app')
<!-- Page content begins -->
@section('content')

<style>
    .article {
        background: #fff;
        padding: 20px;
        margin-bottom: 1.5rem;
        border: 1px solid #ccc;
    }

    .article p {
        text-align: justify;
    }

    a.article-heading {
        font-size: 1.5em;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        display: block;

    }

    a.article-heading:hover {
        text-decoration: none !important;
        color: orange;
    }
</style>

<div class="row">
    <div class="col-sm-8">
        <h2>All Posts</h2>
    </div>
    <div class="col-sm-4 text-right">
        @if(!auth()->guest())
        <a href="{{ url('post/new')}}" class="btn btn-primary">+ New Post</a>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="article">
            <a class="article-heading">Getting Started with Laravel 5.5</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum</p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="article">
            <a class="article-heading">Getting Started with Laravel 5.5</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="article">
            <a class="article-heading">Getting Started with Laravel 5.5</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="article">
            <a class="article-heading">Getting Started with Laravel 5.5</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="article">
            <a class="article-heading">Getting Started with Laravel 5.5</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="article">
            <a class="article-heading">Getting Started with Laravel 5.5</a <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
            of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum</p>
        </div>
    </div>
</div>

@endsection