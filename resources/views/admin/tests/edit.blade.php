@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit college
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
      <form method="post" action="{{ route('admin.colleges.update', $colleges->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">college Name:</label>
          <input type="text" class="form-control" name="college_name" value={{ $colleges->college_name }} />
        </div>
        <div class="form-group">
          <label for="description">college Website :</label>
          <textarea class="form-control" name="college_website"  required>{{ $colleges->college_website }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection