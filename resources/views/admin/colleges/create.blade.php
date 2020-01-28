@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('courses.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Course Name:</label>
              <input type="text" class="form-control" name="course_name"/>
          </div>
        
          <div class="form-group">
                <label for="description">Course Description:</label>
                <textarea class="form-control" name="course_description" placeholder="Enter Course Details" required></textarea>
              
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection