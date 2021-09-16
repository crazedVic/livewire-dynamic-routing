<div>
    {{ $firm->name }}<br>
    {{ $subview }}
    @switch($subview)
        @case("documents")
            <livewire:firms.menu :view="$subview" />
            <livewire:documents.index :owner="$firm"/>
        @break
        @case("documents-finance")
            <livewire:firms.menu :view="$subview" />
            <livewire:documents.index :owner="$firm" dept="Finance"/>
        @break
        @case("documents-hr")
            <livewire:firms.menu :view="$subview" />
            <livewire:documents.index :owner="$firm" dept="HR"/>
        @break
        @case("documents-legal")
            <livewire:firms.menu :view="$subview" />
            <livewire:documents.index :owner="$firm" dept="Legal"/>
        @break
        @case("details")
            <livewire:firms.menu view="" />
            <livewire:firms.read :firm="$firm"/>
        @break
        @case("documents-upload")
            <livewire:documents.upload :owner="$firm"/>
        @break

        @case("documents-finance-upload")
            <livewire:documents.upload :owner="$firm" dept="Finance"/>
        @break
        @case("documents-hr-upload")
            <livewire:documents.upload :owner="$firm" dept="HR"/>
        @break
        @case("documents-legal-upload")
            <livewire:documents.upload :owner="$firm" dept="Legal"/>
        @break

        @case('notes')
            <livewire:notes.index :owner="$firm"/>
        @break

        @case("employees")
            <livewire:employees.index :owner="$firm"/>
        @break
        @default
            {{abort(404)}}
        @break
    @endswitch
</div>
