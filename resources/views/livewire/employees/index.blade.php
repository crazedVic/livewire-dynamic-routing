<div>
    @foreach($owner->employees as $employee)
    <div> <a href="{{ $this->getUrl($employee->id) }}">
         {{ $employee->name }}</a></div>
    @endforeach
</div>
