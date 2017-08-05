@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
<h1>Create a new post</h1>
<hr>
<form method="POST" action="/blog/public/posts">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
	<textarea id="body" name="body" class="form-control"></textarea>
  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
</div>
  @include('layouts.errors')
</form>

</div>
@endsection