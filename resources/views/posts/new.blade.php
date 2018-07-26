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
        <h2>New Post</h2>
    </div>
    <div class="col-sm-4 text-right">
        <a href="{{ url('posts')}}" class="btn btn-info">View All</a>
    </div>
</div>


<div class="row">
    <div class="col-sm-8">
        <div class="content">
            <div class="form-group">
                <label>
                    Category
                </label>
                <input type="text" class="form-control" placeholder="category">

            </div>

        </div>
    </div>
    <div class="col-sm-4">

        <div class="content">
            <h3>Categories</h3>
            <ul>
                <li>Education</li>
                <li>Politics</li>
                <li>Coding</li>
            </ul>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Category Name">
                    <span class="input-group-btn">
                        <button class="btn btn-primary">Add</button>
                    </span>
                </div>

            </div>
        </div>




    </div>
</div>


@endsection