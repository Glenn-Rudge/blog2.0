@extends("layouts.app")
@section("content")
    <div class="d-flex">
        <div>
            <h1>
                Welcome to your dashboard, {{ auth()->user()->first_name }}
            </h1>
        </div>
        <div class="pl-5">
            <a class="d-none d-lg-block btn btn-success btn-sm mt-3" role="button" href="{{ route("posts.create") }}">Create Post</a>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-sm-3">
            <a class="btn btn-primary d-block" href="{{ route("posts.create") }}" role="button">Posts</a>
            <a class="btn btn-primary d-block" href="" role="button">Tags</a>
            <a class="btn btn-danger d-block" href="" role="button">Deleted</a>
        </div>
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
                    </tr>
                    </thead>
                    @foreach($posts as $post)
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $post->title }}</td>
                            <td>$post->description</td>
                            <td>
                                <a href="#" class="badge badge-success">{{ $post->created_at->diffForHumans() }}</a>
                            </td>
                            <td>$post->views</td>
                            <td><a href="#" class="badge badge-info">Update</a></td>
                            <td><a href="#" class="badge badge-danger" data-toggle="modal"
                                   data-target="#basicExampleModal">Delete</a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <!-- Modal -->
                <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete: {{ $post->title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete {{ $post->title }} ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                <form action="{{ route("posts.destroy", $post->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
            @endif
        </div>
    </div>
@endsection
