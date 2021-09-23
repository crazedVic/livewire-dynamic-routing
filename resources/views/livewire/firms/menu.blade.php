<div>
@section('sidemenu')
<div style="background-color:gold">
    <ul>
        <li><a href="{{ $this->getUrl() }}" {!!$this->isActive()!!}> Details</a></li>
        <li><a href="{{ $this->getUrl("all/documents") }}" {!!$this->isActive('documents', 'all')!!}> Documents</a></li>
        <li><a href="{{ $this->getUrl("finance/documents") }}" {!!$this->isActive('documents', 'finance')!!}> Finance Documents</a></li>
        <li><a href="{{ $this->getUrl("HR/documents") }}" {!!$this->isActive('documents', 'hr')!!}>HR Documents</a></li>
        <li><a href="{{ $this->getUrl("legal/documents") }}" {!!$this->isActive('documents', 'legal')!!}>Legal Documents</a></li>
        <li><a href="{{ $this->getUrl("all/notes") }}" {!!$this->isActive('notes')!!}> Notes</a></li>
        <li><a href="{{ $this->getUrl("hr/employees") }}" {!!$this->isActive('employees')!!}> Employees</a></li>
    </ul>
</div>
@endsection
</div>