<p class="text-muted">
    {{$slot ?? 'Written'}} {{$date->diffForHumans()}}
    @if(isset($name))
        by <a href="{{ route("users.show", ["user" => $userId]) }}">
            {{ $name }}
        </a>
    @endif
</p>