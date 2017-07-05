@extends('layouts.app')
<!-- begin page section -->
@section('content') {{--
<h1>Company index view</h1> {!! Form::open(['url'=>'company/new']) !!} --}}
<legend>Form title</legend>
<div class="form-group">
    <label for="">label</label>
    <input type="text" class="form-control" id="" placeholder="Input field">
</div>
<button type="submit" class="btn btn-primary">Submit</button> {{-- {!! Form::close() !!} --}}
<!-- end page section -->
@endsection
