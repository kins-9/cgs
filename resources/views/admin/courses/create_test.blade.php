@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Question
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
      <form method="post" action="{{ route('admin.tests.store') }}">
        
            <div class="form-group"> 
                @csrf
                <label for="question">Question:</label>
                
                <textarea class="form-control" name="question" placeholder="Enter Question" required></textarea>
            </div>
            <input type="text" name="text_id" value="{{ $id }}}}">
            <div class="form-group">
            <label for="answer">Correct Answer:</label>
              <input type="text" class="form-control" name="answer"/>
            </div>
             <div class="form-group">
            <label for="option_a">Option A:</label>
              <input type="text" class="form-control" name="option_a"/>
          </div>
           <div class="form-group">
            <label for="option_b">Option B:</label>
              <input type="text" class="form-control" name="option_b"/>
          </div>
           <div class="form-group">
            <label for="option_c">Option C:</label>
              <input type="text" class="form-control" name="option_c"/>
          </div>
           <div class="form-group">
            <label for="option_d">Option D:</label>
              <input type="text" class="form-control" name="option_d"/>
          </div>

          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection