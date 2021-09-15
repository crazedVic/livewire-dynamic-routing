<div>
    {{ $employee->name }}<br>

    @switch($subview)
        @case("documents")
            <livewire:employees.menu :view="$subview" />
            <livewire:documents.index :owner="$employee"/>
        @break
        @case("details")
            <livewire:employees.menu view="" />
            <livewire:employees.read :employee="$employee"/>
        @break
        @case("documents-upload")
            <livewire:documents.upload :owner="$employee"/>
        @break
    @endswitch
</div>
