<div>
    {{ $document->name }}<br>
    subview: {{ $subview }}<br>
    @switch($subview)
        @case("details")
            <livewire:base.menu-component view="" render="livewire.documents.menu"/>
            <livewire:documents.read :document="$document"/>
        @break
        @case("notes")
            <livewire:base.menu-component :view="$subview" render="livewire.documents.menu"/>
            <livewire:notes.index :owner="$document"/>
        @break
        @default
            {{abort(419, 'Route does not exist')}}
        @break
    @endswitch
</div>
