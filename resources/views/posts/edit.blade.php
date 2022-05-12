@extends("layouts.app")
@section("title", "Update Blog Post")
@section("content")
    <form action="{{ route("posts.update", $post->id) }}" method="POST">
        @method("PUT")
        @include("posts.partials.form")
    </form>
@endsection
