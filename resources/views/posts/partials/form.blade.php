@csrf
<!-- Name input -->
<div class="form-outline mb-4">
    <input name="title" type="text" id="title" class="form-control"
           value="{{ old("title", optional($post ?? null)->title) }}"/>
    <label class="form-label" for="title">Title</label>
</div>

<!-- Message input -->
<div class="form-outline mb-4">
    <textarea name="content" class="form-control" id="content"
              rows="4">{{ old("content", optional($post ?? null)->content) }}</textarea>
    <label class="form-label" for="form4Example3">Content</label>
</div>
@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-4">
{{--    {{ Route::currentRouteName() === "posts.create" ? "Create" : "Update" }}--}}
    update
</button>
