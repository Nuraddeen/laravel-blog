@extends("layouts.app")

@section("content")
<h3 class="text-center">User Dashboard </h3>

<p>
    Name: {{  $user->name }}
</p>
<p>
    Email: {{ $user->email }}
</p>
<div class="row">
    <div class="col-md-6">

        <form method="post" action="{{ route("logout") }}">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form>


    </div>

    <div class="col-md-6">
        <a href="/posts/create" class="btn btn-secondary"> Create New Post </a>

    </div>
</div>
@endsection
