<div>
    @forelse($owner->employees as $employee)
    <div> <a href="{{ $this->getUrl($employee->id) }}">
         {{ $employee->name }}</a></div>
    @empty
        <div>No employees</div>
    @endforelse
</div>
