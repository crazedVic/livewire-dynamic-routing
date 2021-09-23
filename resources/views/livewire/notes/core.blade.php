<div>
    {{ $note->name }}<br>
    @switch($subview)
        @case("details")
            <livewire:base.menu-component view="" render="livewire.notes.menu"/>
            <livewire:notes.read :note="$note"/>
        @break
        @case("documents")
            <livewire:base.menu-component :view="$subview" render="livewire.notes.menu"/>
            <livewire:documents.index :owner="$note"/>
        @break
        @case("documents-upload")
            <livewire:documents.upload :owner="$note"/>
        @break
        @default
            {{abort(419, 'Route does not exist')}}
        @break
    @endswitch
</div>
