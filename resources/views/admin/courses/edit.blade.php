@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit course
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
      <form method="post" action="{{ route('courses.update', $course->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">course Name:</label>
          <input type="text" class="form-control" name="course_name" value={{ $course->course_name }} />
        </div>
        <div class="form-group">
          <label for="description">Course Description :</label>
          <textarea class="form-control" name="course_description"  required>{{ $course->course_description }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection