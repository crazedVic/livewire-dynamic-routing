<div>
@section('sidemenu')
<div style="background-color:gold">
    Global Menu
    <ul>
        <li><a href="{{ $this->getUrl() }}" {!!$this->isActive()!!}> Details</a></li>
        <li><a href="{{ $this->getUrl("all/documents") }}" {!!$this->isActive('documents', 'all')!!}> Documents</a></li>
        <li><a href="{{ $this->getUrl("all/notes") }}" {!!$this->isActive('notes')!!}> Notes</a></li>
        <li><a href="{{ $this->getUrl("hr/employees") }}" {!!$this->isActive('employees')!!}> Employees</a></li>
    </ul>
</div>
@endsection
</div>