@csrf
<!-- Name input -->
<div class="form-outline mb-4">
    <label class="form-label" for="title">Title</label>
    <input name="title" type="text" id="title" class="form-control"
           value="{{ old("title", optional($post ?? null)->title) }}"/>
</div>

<!-- Message input -->
<div class="form-outline mb-4">
    <label class="form-label" for="form4Example3">Content</label>
    <textarea name="content" class="form-control" id="content"
              rows="4">{{ old("content", optional($post ?? null)->content) }}</textarea>
</div>
<!-- Thumbnail input -->
<div class="form-outline mb-4">
    <label class="form-label" for="title">Thumbnail</label>
    <input name="thumbnail" type="file" id="thumbnail" class="form-control-file"/>
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
<input type="hidden" name="user_id"/>
<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-4">
    {{ Route::currentRouteName() === "posts.create" ? "Create" : "Update" }}
</button>
