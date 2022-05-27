@extends("layouts.app")
@section("content")
    <div class="d-flex">
        <div>
            <h1>
                Welcome to your dashboard, {{ auth()->user()->first_name }}.
            </h1>
        </div>
        <div class="pl-5">
            <a class="d-none d-lg-block btn btn-success btn-sm mt-3" role="button" href="{{ route("posts.create") }}">
                Create A Post
            </a>
        </div>
    </div>
    <hr/>
    <div class="row">
        <ul class="nav justify-content-center my-5 col-md8 mx-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-primary btn-sm" href="#">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-primary btn-sm" href="#">Tags</a>
            </li>
            <li class="nav-item">
                <a role="button" class="nav-link btn btn-danger btn-sm" href="#">Trashed</a>
            </li>
        </ul>
        <div class="col-sm">
            @if($posts->count() > 0)
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created</th>
                        <th scope="col">Views</th>
                        <th scope="col">Modify</th>
                        <th scope="col">Post</th>
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    @foreach($posts as $post)
                        <tbody>
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>$post->description</td>
                            <td>
                                <a href="#" class="badge badge-success">{{ $post->created_at->diffForHumans() }}</a>
                            </td>
                            <td>$post->views</td>
                            <td><a href="{{ route("posts.edit", $post->id) }}" class="badge badge-info">Update</a></td>
                            <td>
                                <form action="{{ route("posts.destroy", $post->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="badge badge-danger">Delete</button>
                                </form>
                            </td>
                            @if($post->trashed())
                                <td><a href="{{ route("posts.edit", $post->id) }}" class="badge badge-info">Restore</a>
                                </td>
                            @endif
                        </tr>
                        </tbody>
                    @endforeach
                </table>
    @endif
@endsection
