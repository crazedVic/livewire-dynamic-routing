<div>
    @foreach($owner->notes as $note)
    <div> <a href="{{ $this->getUrl($note->id) }}">
        {{ $note->dept }}: {{ $note->name }}</a></div>
    @endforeach
</div>
