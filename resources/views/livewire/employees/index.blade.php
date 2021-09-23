<div>
    @forelse($owner->employees as $employee)
    <div> <a href="{{ rtrim(url()->current(), 's')}}/{{$employee->id}}">
         {{ $employee->name }}</a></div>
    @empty
        <div>No employees</div>
    @endforelse
</div>
