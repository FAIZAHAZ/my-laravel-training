
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Show') }}</div>

                <div class="card-body">
                    
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="string" value="{{$user->id}}" class="form-control" id="id" name="id" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="string" value="{{$user->name}}"class="form-control" id="nama" name="name" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="form-label">Email</label>
                            <input type="string" value="{{$user->email}}" class="form-control" id="email" name="email" readonly>
                        </div>

                         <a href="{{route('users.index')}}" class="btn btn-secondary">Back to User</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
