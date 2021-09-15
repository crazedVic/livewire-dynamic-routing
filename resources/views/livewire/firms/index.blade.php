<div>
    @foreach($firms as $firm)
    <div> <a href="{{ $this->getUrl($firm->id) }}">
        {{ $firm->name }}</a></div>
    @endforeach
</div>
