{{-- <div style="width:100%">
    Test
    @foreach ($parts as $name => $route)
        @if ($loop->index < count($parts))
            <span>

            </span>
        @else
            <span>{{$name}}</span>
        @endif

        @if ($loop->index + 1 < count($parts))
            <span>/</span>
        @endif
    @endforeach
</div> --}}

{{-- <ul class="page-breadcrumb">
    <li>
        <i class="fa fa-home"></i>
        <a href="{{route('home')}}">Home</a>
        <i class="fa fa-angle-right"></i>
    </li>
    @for($i = 0; $i <= count(Request::segments()); $i++)
    <li>
        <a href="">{{Request::segment($i)}}</a>
        @if($i < count(Request::segments()) & $i > 0)
            {!!'<i class="fa fa-angle-right"></i>'!!}
        @endif
    </li>
    @endfor
</ul> --}}

<div>
    <ul>
    @foreach ($routes as $route)
        <li><a href="/{{$route['url']}}">{{$route['name']}}</a></li>/
    @endforeach
    </ul>
</div>
