@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="offset-md-3 col-md-6 ">
            <h3>New User Registration</h3>

            <form action="/register" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Fullname:</label>
                    <input type="text" class="form-control" placeholder="Enter fullname" name="name" required>
                    @error('name')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">

                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd"
                        required>

                    @error('password')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="confirm_password ">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Re-enter password" id="confirm_password" required>
                </div>


                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>

            <p> Already have an account? <a href="{{ route("login") }}"> Login here </a></p>
        </div>
    </div>


@endsection
