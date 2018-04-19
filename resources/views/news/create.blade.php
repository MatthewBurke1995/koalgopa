@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h1> Create new article </h1>


          <form method="POST" action="store">
            @csrf
            <div class="form-group">
              <label for="author">Author</label>
              <input name="author" type="text" class="form-control" id="author" required>
            </div>

            <div class="form-group">
              <label for="articleTitle">Article Title</label>
              <input name="articleTitle" type="text" class="form-control" id="articleTitle" required>
            </div>

            <div class="form-group">
              <label for="articleText">Article Text</label>
              <textarea name = "articleText"  class="form-control" id="articleText" rows="20" required></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>

          </form>





        </div>
    </div>
</div>
@endsection
