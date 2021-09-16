<div>
    Notes Index:<br>
    @forelse($owner->notes as $note)
    <div> <a href="{{ $this->getUrl($note->id) }}">
        {{ $note->dept }}: {{ $note->name }}</a></div>
    @empty
        <div>No notes</div>
    @endforelse
</div>
