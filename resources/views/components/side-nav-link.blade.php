@props([
'label',
'icon',
'route' => null
])
<li>
    <a @if ($route) href="{{route($route)}}" @endif class="stroke-gray-400 @if (Route::is($route)) bg-blue-100 text-primary stroke-primary
        
    @endif w-full flex items-center gap-5 text-gray-400 p-3">
        {!!$icon!!}
        <span>{{$label}}</span>
    </a>
</li>