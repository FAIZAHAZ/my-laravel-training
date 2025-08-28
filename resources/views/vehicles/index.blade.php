@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Vehicles Index') }}</div>

                <div class="card-body">
                  <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>No Plat</th>
                                <th>Model</th>
                                <th>Color</th>
                                 <th>User</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->id}}</td>
                                    <td>{{ $vehicle->noplat}}</td>
                                    <td>{{ $vehicle->model}}</td>
                                    <td>{{ $vehicle->color}}</td> 
                                    <td>{{ $vehicle->user->name }}</td>  
                                    <td>@cand('view',$vehicle)
                                        <a href="{{route('vehicles.show',$vehicle)}}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{route('vehicles.edit',$vehicle)}}" class="btn btn-info btn-sm">Edit</a>
                                        <a onclick ="return confirm('Are you sure you want to delete this vehicle?') || event.preventDefault();" href="{{route('vehicles.destroy',$vehicle)}}" class="btn btn-danger">Delete</a>
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