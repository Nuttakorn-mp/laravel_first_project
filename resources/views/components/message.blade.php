<h2>
    @if (empty($name))
    component message ...
    @else
    component message {{$name}}
    @endif
</h2>