<div>
    @foreach($documents as $document)
    <div> <a href="{{ $this->getUrl($document->id) }}">
        {{ $document->dept }}: {{ $document->name }}</a></div>
    @endforeach
</div>
