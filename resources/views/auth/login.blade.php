@extends("layouts.app")
@section("content")
    <div class="col-md-8 offset-4">
        <div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="email">
                <small id="email" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="example">
            </div>
            <div class="form-group form-check">
                <input name="remember" value="{{ old('remember') ? 'checked' : '' }}" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="example">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="text-center">
                <p>Not a member? <a href="{{ route("register") }}">Register</a></p>
            </div>
        </form>
    </div>
@endsection
