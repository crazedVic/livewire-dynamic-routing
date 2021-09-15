<div>
    <ul>
    <li><a href="{{ $this->getUrl() }}"
        {!! $this->isActive("") !!}> Details</a></li>
    <li><a href="{{ $this->getUrl("notes") }}" {!! $this->isActive("notes") !!}> Notes</a></li>
</ul>
</div>
