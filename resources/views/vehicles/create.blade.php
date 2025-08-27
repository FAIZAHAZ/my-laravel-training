
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Create') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="string" class="form-control" id="id" name="id" required>
                        </div>

                        <div class="mb-3">
                            <label for="noplat" class="form-label">No Plat</label>
                            <input type="string" class="form-control" id="noplat" name="noplat" required>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="string" class="form-control" id="model" name="model" required>
                        </div>

                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Vehicle</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
