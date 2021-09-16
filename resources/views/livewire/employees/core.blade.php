<div>
    {{ $employee->name }}<br>

    @switch($subview)
        @case("documents")
            <livewire:base.menu-component :view="$subview" render="livewire.employees.menu"/>
            <livewire:documents.index :owner="$employee"/>
        @break
        @case("details")
            <livewire:base.menu-component view="" render="livewire.employees.menu"/>
            <livewire:employees.read :employee="$employee"/>
        @break
        @case("documents-upload")
            <livewire:documents.upload :owner="$employee"/>
        @break
        @default
            {{ abort(404) }}
        @break
    @endswitch
</div>
