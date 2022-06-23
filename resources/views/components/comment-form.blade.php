<form method="POST" action="{{ $route }}">
    @csrf
    <h3 class="font-weight-bold text-center my-5">Leave a reply</h3>
    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="input-group md-form form-sm form-3 pl-0">
                <div class="input-group-prepend">
                    <span class="input-group-text white black-text" id="basic-addon8">Name</span>
                </div>
                <input type="text"
                       class="form-control mt-0 black-border rgba-white-strong"
                       placeholder="{{ auth()->user() ? auth()->user()->first_name : "Sign up for an account to leave a comment" }}"
                       disabled
                >
            </div>
        </div>
    {{--        <div class="col-lg-6 col-md-6 mb-4">--}}
    {{--            <div class="input-group md-form form-sm form-3 pl-0">--}}
    {{--                <div class="input-group-prepend">--}}
    {{--                    <span class="input-group-text white black-text" id="basic-addon10">Role</span>--}}
    {{--                </div>--}}
    {{--                <input type="number"--}}
    {{--                       class="form-control mt-0 black-border rgba-white-strong"--}}
    {{--                       placeholder="$user->role"--}}
    {{--                       disabled>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    <!-- Grid column -->
    </div>
    <div class="row">
        <div class="col-12 mt-1">
            <div class="form-group basic-textarea rounded-corners">
                <textarea name="content" class="form-control" id="content" rows="5"
                          placeholder="Write something here..."></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-grey btn-block">
                    Add Comment
                </button>
            </div>
        </div>
    </div>
</form>