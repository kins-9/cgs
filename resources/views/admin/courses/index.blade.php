@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
    
    <br />
  @endif
  <div class="col-lg-12">
        <a name="create_link" class="btn btn-primary" href="{{ route('courses.create') }}" role="button">Add New</a>
        
    </div>
<br/>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Course Name</td>
          <td>Course Description</td>
         
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->course_name}}</td>
            <td>{{$course->course_description}}</td>
            <td><a href="/courses/{{$course->id}}/tests/create" class="btn btn-primary">Add Test</a></td>
            <td><a href="{{ route('courses.edit',$course->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('courses.destroy', $course->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection