<div>
@section('sidemenu')
<div style="background-color:gold">
    <ul>
        <li><a href="{{ $this->getUrl() }}"> Details</a></li>
        <li><a href="{{ $this->getUrl("all/documents") }}"> Documents</a></li>
        <li><a href="{{ $this->getUrl("finance/documents") }}"> Finance Documents</a></li>
        <li><a href="{{ $this->getUrl("HR/documents") }}">HR Documents</a></li>
        <li><a href="{{ $this->getUrl("legal/documents") }}">Legal Documents</a></li>
        <li><a href="{{ $this->getUrl("all/notes") }}"> Notes</a></li>
        <li><a href="{{ $this->getUrl("hr/employees") }}"> Employees</a></li>
    </ul>
</div>
@endsection
</div>