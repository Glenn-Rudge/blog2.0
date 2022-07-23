@extends("layouts.app")
@section("content")
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <form class="form-horizontal" action="{{ route("users.update", ["user" => $user->id]) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <img src="{{ $user->image ? $user->image->url(): '' }}" alt="avatar">
                    <p class="text-sm">Image should be 128x128</p>
                    <label for="exampleFormControlFile1">Avatar</label>
                    <input name="avatar" type="file" class="form-control-file" id="avatar">
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="user">First Name:</label>
                    <input type="text" class="form-control" value="{{ $user->first_name }}" type="text"/>
                </div>
                <div class="form-group">
                    <label for="user">Last Name:</label>
                    <input type="text" class="form-control" value="{{ $user->last_name }}" type="text"/>
                </div>
            </div>
            <div class="form-group col-md-4 offset-4">
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
