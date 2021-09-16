<div>
    @foreach($documents as $document)
    <div> <a href="{{ $this->getUrl($document->id) }}">
        {{ $document->dept }}: {{ $document->name }}</a></div>
    @endforeach

    <a href="/{{implode('/', Request::segments())}}/upload" style="background-color:lightgreen;border:1px solid black">Upload</a>
</div>
