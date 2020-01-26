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
          
                    <form method="post" action="{{ route('admin.users.update', $user->id) }}" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="control-label" for="name">Name <span class="required">*</span>
                            </label>
                            <div class="">
                                <input type="text" value="{{$user->name}}" id="name" name="name" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="control-label" for="phone">Phone <span class="required">*</span>
                            </label>
                            <div class="">
                                <input type="text" value="{{$user->phone}}" id="phone" name="phone" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('phone'))
                                <span class="help-block">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label" for="email">Email <span class="required">*</span>
                            </label>
                            <div class="">
                                <input type="text" value="{{$user->email}}" id="email" name="email" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="btn btn-success">Save User Changes</button>
                            </div>
                        </div>
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









