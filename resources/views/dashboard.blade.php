@extends("layouts.app")
@section("content")
    <div class="">
        <div class="col-md">
            <h1>
                Welcome to your dashboard, {{ auth()->user()->first_name }}.
            </h1>
            <div class="col-md">
                <img src="{{ \Illuminate\Support\Facades\Auth::user()->avatar }}" alt="">
            </div>
            <!--            --><?php echo \Illuminate\Support\Facades\Auth::user(); ?>
        </div>
    </div>
    <hr/>
    <div class="d-flex">
        <div class="">
            <ul class="nav justify-content-center my-5 col-md8 mx-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-sm" href="{{ route('posts.index') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a role="button" class="nav-link btn btn-success btn-sm" href="{{ route("posts.create") }}">
                        Create A Post</a>
                </li>
                <li class="nav-item">
                    <a role="button" class="nav-link btn btn-success btn-sm"
                       href="{{ route("users.show", auth()->user()->id) }}">
                        My Profile</a>
                </li>
            </ul>
        </div>
        <div class="">
            @if($posts->count() > 0)
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created</th>
                        <th scope="col">Views</th>
                        @can("update")
                            <th scope="col">Modify</th>
                            <th scope="col">Post</th>
                        @endcan
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            @if($post->trashed())
                                <td class="text-muted">{{ $post->title }}</td>
                            @else
                                <td>{{ $post->title }}</td>
                            @endif
                            <td>$post->description</td>
                            <td>
                                <a href="#" class="badge badge-success">{{ $post->created_at->diffForHumans() }}</a>
                            </td>
                            <td>$post->views</td>
                            @can("update", $post)
                                <td><a href="{{ route("posts.edit", $post->id) }}" class="badge badge-info">Update</a>
                                </td>
                            @endcan
                            {{--                            @can("destroy", $post)--}}
                            <td>
                                @if($post->trashed())
                                    <a href="{{ route("posts.restore", $post->id) }}"
                                       class="badge badge-info">Restore</a>
                                @else
                                    <form action="{{ route("posts.destroy", $post->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="badge badge-danger">Delete</button>
                                    </form>
                            @endif
                            {{--                            @endcan--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
    @endif
@endsection
