
@extends('layouts.appl')

@section('content')
<div class="container">
    <div class="row">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Applicant</a></li>
    <li class="breadcrumb-item active" aria-current="page">Courses</li>
  </ol>
</nav>
</div>
</div>
<div class="row">

    @foreach($courses as $course)
    <div class="col-md-4">
        <div class="alert alert-info" role="alert">
             <a href="#" class="alert-link">{{$course->course_name}}</a>.
        </div>
    </div>
    @endforeach    
</div>
@endsection