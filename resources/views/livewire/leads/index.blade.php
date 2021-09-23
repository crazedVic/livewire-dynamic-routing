<div>
    @foreach($leads as $lead)
    <div> <a href="{{ rtrim(url()->current(), 's')}}/{{$lead->id }}">
        {{ $lead->name }}</a></div>
    @endforeach
</div>
