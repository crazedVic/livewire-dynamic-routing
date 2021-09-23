<div>
    @foreach($firms as $firm)
    <div> <a href="{{ rtrim(url()->current(), 's')}}/{{$firm->id}}">
        {{ $firm->name }}</a></div>
    @endforeach
</div>
