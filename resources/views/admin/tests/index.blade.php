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
        <a name="create_link" class="btn btn-primary" href="{{ route('admin.tests.create') }}" role="button">Add New</a>
        
    </div>
<br/>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Question</td>
          <td>Correct Answer</td>
          <td>Option A</td>
          <td>Obtion B</td>
          <td>Obtion C</td>
          <td>Obtion D</td>
         
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tests as $test)
        <tr>
            <td>{{$test->id}}</td>
            <td>{{$test->question}}</td>
            <td>{{$test->answer}}</td>
            <td>{{$test->option_a}}</td>
            <td>{{$test->option_b}}</td>
            <td>{{$test->option_c}}</td>
            <td>{{$test->option_d}}</td>
          
            <td><a href="{{ route('admin.tests.edit',$test->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('admin.tests.destroy', $test->id)}}" method="post">
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