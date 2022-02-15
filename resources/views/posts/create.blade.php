@extends('layouts.app')


@section("content")

   <div class="row">
        <div class="offset-md-3 col-md-6 ">
            <h3>New Post</h3>

            <form action="{{ route("posts.store") }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">Title: </label>
                    <input type="title" class="form-control" placeholder="Enter post title" name="title" required>
                  
                   @error("title")
                       <span class="text-danger">   {{ $message }} </span>
                   @enderror

                </div>
                
                <div class="form-group">
                    <label for="body">Body: </label>
                    <textarea class="form-control" placeholder="Enter post body hrere" name="body" ></textarea>
                  
                    @error('body')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                    
                </div>

                  <button type="submit" class="btn btn-secondary">Submit</button>

            </form> 

        </div>

    </div>
@endsection