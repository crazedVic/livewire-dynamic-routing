<div>
    @foreach($leads as $lead)
    <div> <a href="{{ $this->getUrl($lead->id) }}">
        {{ $lead->name }}</a></div>
    @endforeach
</div>
