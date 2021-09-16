<div>
    <ul>
    @foreach ($routes as $route)
        @if ($loop->index < (count($routes)-1))
            <li><a href="/{{$route['url']}}">{{$route['name']}}</a></li>
        @else
            <li>{{$route['name']}}</li>
        @endif
    @endforeach
    </ul>
</div>
