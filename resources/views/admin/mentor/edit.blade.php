@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit mentor
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
      <form method="post" action="{{ route('admin.mentors.update', $mentor->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="title">mentor Title:</label>
          <input type="text" class="form-control" name="mentor_title" value={{ $mentor->mentor_title }} />
        </div>
        <div class="form-group">
          <label for="name">mentor Name:</label>
          <input type="text" class="form-control" name="mentor_name" value={{ $mentor->mentor_name }} />
        </div>
        <div class="form-group">
          <label for="email">mentor Email:</label>
          <input type="email" class="form-control" name="mentor_email" value={{ $mentor->mentor_email }} />
        </div>
        <div class="form-group">
          <label for="description">mentor Description :</label>
          <textarea class="form-control" name="mentor_description"  required>{{ $mentor->mentor_description }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection