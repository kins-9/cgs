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
      <form method="post" action="{{ route('admin.colleges.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">college Name:</label>
              <input type="text" class="form-control" name="college_name"/>
          </div>
        
          <div class="form-group">
                <label for="description">college Website:</label>
                <input type="url" class="form-control" name="college_website"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection