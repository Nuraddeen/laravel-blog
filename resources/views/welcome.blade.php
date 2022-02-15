@extends('layouts.app')


@section("page-title")
Welcome
@endsection

@section("content")


<div class="container">
    <h1> Welcome Page </h1>
<hr>

<a href="/register" class="btn btn-secondary mr-5"> Register</a>
 
<a href="/login" class="btn btn-secondary"> Login</a>
<hr>
</div>

@endsection
