<p class="text-muted">
    {{$slot ?? 'Written'}} {{$date->diffForHumans()}}
    @if(isset($name))
        by {{$name}}
    @endif
</p>