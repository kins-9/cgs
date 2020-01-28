@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Mentor
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
      <form method="post" action="{{ route('admin.mentors.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">Mentor Title:</label>
              <input type="text" class="form-control" name="mentor_title"/>
          </div>
         <div class="form-group">
             <label for="name">Mentor Name:</label>
              <input type="text" class="form-control" name="mentor_name"/>
          </div>
          <div class="form-group">
             <label for="email">Mentor Email:</label>
              <input type="email" class="form-control" name="mentor_email"/>
          </div>
          <div class="form-group">
                <label for="description">mentor Description:</label>
                <textarea class="form-control" name="mentor_description" placeholder="Enter mentor Details" required></textarea>
              
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection