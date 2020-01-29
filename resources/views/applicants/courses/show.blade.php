
@extends('layouts.appl')

@section('content')

    <div class="row">
        <br/><br/>
  <nav aria-label="breadcrumb ml-2">
  <ol class="breadcrumb col-md-12">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Applicant</a></li>
  </ol>
</nav>
</div>
<!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
            <h2>{{ $course->course_name }}</h2>
            <p>{{ $course->course_description }}</p>
            <p><a class="btn btn-secondary" href="#" role="button">University/Colleges;</a></p>
          </div>
        
        </div>

        <hr/>


  

@endsection