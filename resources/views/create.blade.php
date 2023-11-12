<!-- resources/views/students/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row">
        <div class="col-md-8 mx-auto ">
            <div class="card border-secondary shadow-sm">
              <div class="card-header">
                <h2>Add User</h2>
             </div>
              <div class="card-body">
               
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       <div class="my-3">
                            <button type="submit" class="btn btn-primary">Add User</button>
                       </div>
                    </form>
              </div>
            </div>
        </div>
       </div>
    </div>
@endsection
