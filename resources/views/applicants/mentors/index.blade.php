@extends('layouts.appl')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">

    </div>
    
 
    <div class="row">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Applicant</a></li>
    <li class="breadcrumb-item active" aria-current="page">Courses</li>
  </ol>
</nav>
</div>
   <br />
  <div class="row p-2">
      @foreach($mentors as $mentor)
      <div class="card border-primary col-md-4 m-3">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
          <h4 class="card-title">{{$mentor->mentor_title}} {{$mentor->mentor_name}}</h4>
          <p class="card-text">{{$mentor->mentor_description}}</p>
           <div class="alert alert-info" role="alert">
             <a class="" href="mailto:{{$mentor->mentor_email}}">{{$mentor->mentor_email}}</a>
        </div>
          
        </div>
      </div>
      @endforeach
  </div>
        
   <div>
@endsection