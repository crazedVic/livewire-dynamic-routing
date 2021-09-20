<div>
@section('sidemenu')
<div style="background-color:gold">
    <ul>
        <li><a href="{{ $this->getUrl() }}"> Details</a></li>
        <li><a href="{{ $this->getUrl("documents") }}"> Documents</a></li>
        <li><a href="{{ $this->getUrl("documents/finance") }}"> Finance Documents</a></li>
        <li><a href="{{ $this->getUrl("documents/HR") }}">HR Documents</a></li>
        <li><a href="{{ $this->getUrl("documents/legal") }}">Legal Documents</a></li>
        <li><a href="{{ $this->getUrl("notes") }}"> Notes</a></li>
        <li><a href="{{ $this->getUrl("employees") }}"> Employees</a></li>
    </ul>
</div>
@endsection
</div>