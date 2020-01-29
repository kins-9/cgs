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
      <form method="post" action="/courses/{{$course->id}}/tests">
        
            <div class="form-group"> 
                @csrf
                <label for="question">Question:</label>
                 <input type="text" class="form-control" name="question[question]" placeholder="Enter Question Here"/>
            </div>
           <div class="form-group">
            <fieldset>
                <legend>Choices</legend>
                    <div>
                        <div class="form-group">
                          <label for="answer1">Choice 1</label>
                          <input type="text" name="answers[][answer]" class="form-control" placeholder="Enter Choice 1 Here">
                         </div>
                    </div>
              
                    <div>
                        <div class="form-group">
                          <label for="answer2">Choice 2</label>
                          <input type="text" name="answers[][answer]" class="form-control" placeholder="Enter Choice 2 Here">
                          
                        </div>
                    </div>
               
                    <div>
                        <div class="form-group">
                          <label for="answer3">Choice 3</label>
                          <input type="text" name="answers[][answer]" class="form-control"placeholder="Enter Choice 3 Here">
                          
                        </div>
                    </div>
                      
                    <div>
                        <div class="form-group">
                          <label for="answer4">Choice 4</label>
                          <input type="text" name="answers[][answer]" class="form-control"placeholder="Enter Choice 4 Here">
                          
                        </div>
                    </div>
                </fieldset>
           </div>

          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection