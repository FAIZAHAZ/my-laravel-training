
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Create') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="string" class="form-control" id="id" name="id" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="string" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="string" class="form-control" id="email" name="email" required>
                        </div>

                
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
