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

<div class="row">
    <div class="col-md-12 text-center mt-5">
        <h4>Recent Posts </h4>

        <div class="table-responsive">

            <table class="table table-striped">
                <tr>
                    <th>SN</th>
                     <th>Title</th>
                     <th> Date</th>
                     <th>Action</th>
                </tr>


                @foreach($recentPosts as $post)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>
                            <h5> {{ $post->title }} </h5>
                            {{ $post-> body }}

                            </td>

                            <td> {{ $post-> created_at }}</td>

                        <td>Edit Delete</td>

                    </tr>

                @endforeach

                <tr>
                    <td colspan="4">
                         {{ $recentPosts->links() }}
                    </td>
                </tr>
                

            </table>

           
        </div>
    </div>
</div>
@endsection
