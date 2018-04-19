@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h1> Create new post </h1>


          <form method="POST" action="store">
            @csrf
            <div class="form-group">
              <label for="postTitle">Post Title</label>
              <input name="postTitle" type="text" class="form-control" id="postTitle" maxlength="100" required>
            </div>
            <div class="form-group">
              <label for="postText">Post Text</label>
              <textarea name = "postText"  class="form-control" id="postText" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>

          </form>





        </div>
    </div>
</div>
@endsection
