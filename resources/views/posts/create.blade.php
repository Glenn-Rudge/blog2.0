@extends("layouts.app")
@section("title", "Create Blog Post")
@section("content")
    <form
            action="{{ route("posts.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include("posts.partials.form")
    </form>
@endsection
