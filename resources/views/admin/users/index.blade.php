@extends('layouts.master')

@section('content')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h3">Admin|System Users</h1>

          </div>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                 <div class="card-body">
                     <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th><Roles/th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th><Roles/th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                           <tbody>
                            @if(count($users))
                            @foreach ($users as $row)
                            <tr><td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{implode(',', $row->roles()->get()->pluck('name')->toArray())}}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit',  $row->id) }}" class="btn btn-info btn-xs float-left"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <form action="{{ route('admin.users.destroy', $row->id) }}" method="post" class="float-left">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                    </form>
                                   <button class="btn btn-danger" type="submit">
                                           <i class="fa fa-trash" title="Delete"></i>
                                   </button>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
