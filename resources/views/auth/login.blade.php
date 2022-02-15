@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="offset-md-3 col-md-6 ">
            <h3>User Login</h3>

            <form action="/login" method="post">
                @csrf

                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                  
                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror

                </div>
                
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                  
                    @error('password')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                    
                </div>

                  <button type="submit" class="btn btn-secondary">Login</button>

            </form>

            <p> Don't have an account? <a href="/register"> Register here </a></p>

        </div>

    </div>

@endsection
