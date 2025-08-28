@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Users Index') }}</div>

                <div class="card-body">
                  <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>    
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id}}</td>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->emel}}</td>
                                    <td><a href="{{route('users.show',$user)}}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{route('users.edit',$user)}}" class="btn btn-info btn-sm">Edit</a>
                                        <a onclick ="return confirm('Are you sure you want to delete this user?') || event.preventDefault();" href="{{route('users.destroy',$user)}}" class="btn btn-danger">Delete</a>
                                    </td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>  

            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection