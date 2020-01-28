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
        <a name="create_link" class="btn btn-primary" href="{{ route('admin.mentors.create') }}" role="button">Add New</a>
        
    </div>
<br/>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>mentor Name</td>
          <td>mentor Description</td>
         
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($mentors as $mentor)
        <tr>
            <td>{{$mentor->id}}</td>
            <td>{{$mentor->mentor_name}}</td>
            <td>{{$mentor->mentor_description}}</td>
          
            <td><a href="{{ route('admin.mentors.edit',$mentor->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('admin.mentors.destroy', $mentor->id)}}" method="post">
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