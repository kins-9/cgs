@extends('layouts.master')

@section('content')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h2 class="h3">Admin|Applicants</h2>

          </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <a href="{{route('admin.users.index')}}" class="btn btn-info btn-xs ml-auto"><i class="fa fa-chevron-left"></i> Back </a>
                </div>
                 <div class="card-body">

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
   <form action="{{ route('admin.users.update',$user) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        @foreach ($role as $role )

                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="roles[]"  value="{{ $role->id }}" checked>
                                {{ $role->name }}
                              </label>
                            </div>
                        @endforeach
                        <div class="clear-f p-5"></div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
                </div>
            </div>
        </div>
    </div>
</div>









