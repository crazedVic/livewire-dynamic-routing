<div>
    {{ $firm->name }}<br>
    {{ $subview }}
    @switch($subview)
        @case("documents")
            <livewire:base.menu-component :view="$subview" render="livewire.firms.menu"/>
            <livewire:documents.index :owner="$firm"/>
        @break
        {{-- @case("finance-documents")
            <livewire:base.menu-component :view="$subview" render="livewire.firms.menu"/>
            <livewire:documents.index :owner="$firm" dept="Finance"/>
        @break
        @case("hr-documents")
            <livewire:base.menu-component :view="$subview" render="livewire.firms.menu"/>
            <livewire:documents.index :owner="$firm" dept="HR"/>
        @break
        @case("legal-documents")
            <livewire:base.menu-component :view="$subview" render="livewire.firms.menu"/>
            <livewire:documents.index :owner="$firm" dept="Legal"/>
        @break --}}
        @case("details")
            <livewire:base.menu-component view="" render="livewire.firms.menu"/>
            <livewire:firms.read :firm="$firm"/>
        @break
        @case("documents-upload")
            <livewire:documents.upload :owner="$firm"/>
        @break

        {{-- @case("finance-documents-upload")
            <livewire:documents.upload :owner="$firm" dept="Finance"/>
        @break
        @case("hr-documents-upload")
            <livewire:documents.upload :owner="$firm" dept="HR"/>
        @break
        @case("legal-documents-upload")
            <livewire:documents.upload :owner="$firm" dept="Legal"/>
        @break --}}

        @case('notes')
            <livewire:base.menu-component :view="$subview" render="livewire.firms.menu"/>
            <livewire:notes.index :owner="$firm"/>
        @break

        @case("employees")
            <livewire:base.menu-component :view="$subview" render="livewire.firms.menu"/>
            <livewire:employees.index :owner="$firm"/>
        @break
        @default
            {{abort(404)}}
        @break
    @endswitch
</div>
