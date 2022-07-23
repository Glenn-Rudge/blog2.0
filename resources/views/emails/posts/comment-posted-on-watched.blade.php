<style>
    body {
        font-family: Ariel, Helvetica, sans-serif;
    }
</style>

<p>Hey! {{ $comment->commentable->user->name }}</p>

<p>Someone has commented on a blog post!
    <a href="{{ route('posts.show', ['post' => $comment->commentable->id]) }}">
        {{ $comment->commentable->title }}
    </a>
</p>

<hr/>

<p>
    <img src="{{ $message->embed(public_path('storage/' . $comment->user->image->path)) }}"/>
    <a href="{{ route('users.show', ['user' => $comment->user->id]) }}">
        {{ $comment->user->first_name }}
    </a> said:
</p>

<p>
    "{{ \Illuminate\Support\Str::limit($comment->content, 25, '...') }}"
</p>
