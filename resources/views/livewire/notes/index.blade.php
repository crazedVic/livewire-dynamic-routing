<div>
    Notes Index:<br>
    @forelse($owner->notes as $note)
    <div> <a href="{{ rtrim(url()->current(), 's')}}/{{$note->id}}">
        {{ $note->dept }}: {{ $note->name }}</a></div>
    @empty
        <div>No notes</div>
    @endforelse
</div>
