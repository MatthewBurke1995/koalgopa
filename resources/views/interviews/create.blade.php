@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h1> Create new interview </h1>


          <form method="POST" action="store">
            @csrf
            <div class="form-group">
              <label for="author">Author</label>
              <input name="author" type="text" class="form-control" id="author" required>
            </div>

            <div class="form-group">
              <label for="interviewTitle">Interview Title</label>
              <input name="interviewTitle" type="text" class="form-control" id="interviewTitle" required>
            </div>

            <div class="form-group">
              <label for="interviewText">Interview Text</label>
              <textarea name = "interviewText"  class="form-control" id="interviewText" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>

          </form>





        </div>
    </div>
</div>
@endsection
