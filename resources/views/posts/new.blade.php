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
                {{--
                <input type="text" class="form-control" placeholder="category"> --}}
                <select name="category_id" class="form-control">
                    @if(count($categories) > 0) @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach @endif
                </select>

            </div>
            <div class="form-group">
                <label>
                    Title
                </label>

                <input type="text" name="title" class="form-control" placeholder="Post Title">


            </div>

            <div class="form-group">
                <label>
                    Content
                </label>

                <textarea rows="10" type="text" name="content" class="form-control" placeholder="Post Title">
                </textarea>


            </div>

            <div class="text-right">
                <button class="btn btn-primary">Publish</button>
            </div>


        </div>
    </div>
    <div class="col-sm-4">

        <div class="content">
            <h3>Categories</h3>
            @if(count($categories) > 0)
            <ul>
                @foreach($categories as $category)
                <li>{{$category->name}}</li>
                @endforeach
            </ul>
            @else

            <p>Categories not found</p>
            @endif
            <form method="post" action="{{ url('post/category/new')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="name" class="form-control" placeholder="Category Name">
                        <span class="input-group-btn">
                            <button class="btn btn-primary">Add</button>
                        </span>
                    </div>
            </form>

            </div>
        </div>




    </div>
</div>


@endsection