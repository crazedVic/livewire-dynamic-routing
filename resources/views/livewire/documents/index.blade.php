<div>
    Department: {{$this->dept}}<br>

    @forelse($documents as $document)
    <div> <a href="{{rtrim(url()->current(), 's') }}/{{$document->id}}">
        {{ $document->dept }}: {{ $document->name }}</a></div>
    @empty
        <div>No documents</div>
    @endforelse

    <a href="/{{implode('/', Request::segments())}}/upload" style="background-color:lightgreen;border:1px solid black">Upload</a>
</div>
