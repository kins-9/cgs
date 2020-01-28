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
        <a name="create_link" class="btn btn-primary" href="{{ route('admin.colleges.create') }}" role="button">Add New</a>
        
    </div>
<br/>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>college Name</td>
          <td>college Description</td>
         
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($colleges as $college)
        <tr>
            <td>{{$college->id}}</td>
            <td>{{$college->college_name}}</td>
            <td>{{$college->college_website}}</td>
          
            <td><a href="{{ route('admin.colleges.edit',$college->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('admin.colleges.destroy', $college->id)}}" method="post">
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