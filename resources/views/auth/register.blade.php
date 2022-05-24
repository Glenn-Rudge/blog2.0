@extends("layouts.app")
@section("title", "Register")
@section("content")
    <form method="POST" action="{{ route("register") }}" class="needs-validation" novalidate autocomplete="off">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div>
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="md-form md-outline mt-0">
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old("first_name") }}">
                    <label for="first-name">First name</label>
                    <div class="invalid-feedback">
                        First name should contain from 4 to 50 characters
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="md-form md-outline mt-0">
                    <input type="text" name="last_name" id="last-name" class="form-control" value="{{ old("last_name") }}">
                    <label for="last-name">Last name</label>
                    <div class="invalid-feedback">
                        Last name should contain from 4 to 50 characters
                    </div>
                </div>
            </div>
        </div>

        <div class="md-form md-outline mt-0">
            <input type="email" name="email" id="email" class="form-control" value="{{ old("email") }}">
            <label data-error="wrong" data-success="right" for="user-email">Your email</label>
        </div>
        <div class="md-form md-outline mt-0 mb-2">
            <input type="password" name="password" id="password" class="form-control">
            <label data-error="wrong" data-success="right" for="register-password">Your password</label>
            <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted">
                At least 6 characters
            </small>
        </div>
        <div class="md-form md-outline mt-0">
            <input type="password" name="password_confirmation" id="password-confirm" class="form-control">
            <label data-error="wrong" data-success="right" for="password-confirm">Confirm password</label>
            <div class="invalid-feedback">
                Password confirmation is invalid
            </div>
        </div>

        <div class="md-form md-outline">
            <input type="number" name="phone_number" id="phone_number" class="form-control" value="{{ old("phone_number") }}"
                   aria-describedby="register-phoneHelpBlock">
            <label for="phone_number">Phone number</label>
            <small id="register-phoneHelpBlock" class="form-text text-muted mb-3">
                Optional - for two step authentication
            </small>
        </div>

        <div class="text-center pb-2">

            <div class="form-check pl-0 mb-3">
                <input type="checkbox" class="form-check-input filled-in" id="new1">
                <label class="form-check-label small text-uppercase card-link-secondary" for="new1">Subscribe to our
                    newsletter
                </label>
            </div>

        </div>

        <div class="text-center mb-2">

            <button type="submit" class="btn btn-primary mb-4">Sign Up</button>

            <p>or sign up with:</p>

            <a type="button" class="btn-floating btn-fb btn-sm mr-1">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm mr-1">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm mr-1">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
                <i class="fab fa-github"></i>
            </a>

            <hr class="mt-4">

            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="#" data-toggle="modal" data-target="#terms-modal">terms of service</a>
            </p>
        </div>
    </form>

    </div>

    </section>
    <!--Section: Register Form-->

    <!--Section: Logout Form-->
    <section class="logout-form py-5 text-center">
        <p class="logged-user-message pb-2"></p>
        <a href="login.html" class="btn btn-primary waves-effect">Log in</a>
        <button class="btn btn-danger waves-effect delete-user">Remove user account</button>
    </section>
    <!--Section: Logout Form-->
@endsection
