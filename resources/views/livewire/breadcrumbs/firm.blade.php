<div>
    <ul>
    @foreach ($routes as $route)
        <li><a href="/{{$route['url']}}">{{$route['name']}}</a></li>
    @endforeach
    </ul>
</div>
