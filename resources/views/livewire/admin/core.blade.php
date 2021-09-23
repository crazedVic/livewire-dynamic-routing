<div>
    {{ $firm->name }}<br>
    {{ $subview }}
    @switch($subview)
        @case("details")
            <livewire:base.menu-component view="" render="livewire.admin.menu"/>
            <livewire:firms.read :firm="$firm"/>
        @break

        @case("documents")
            <livewire:base.menu-component :view="$subview" render="livewire.admin.menu"/>
            <livewire:documents.index :owner="$firm"/>
        @break

        @case("documents-upload")
            <livewire:documents.upload :owner="$firm"/>
        @break

        @case('notes')
            <livewire:base.menu-component :view="$subview" render="livewire.admin.menu"/>
            <livewire:notes.index :owner="$firm"/>
        @break

        @case("employees")
            <livewire:base.menu-component :view="$subview" render="livewire.admin.menu"/>
            <livewire:employees.index :owner="$firm"/>
        @break
        @default
            {{abort(419, 'Route does not exist')}}
        @break
    @endswitch
</div>
