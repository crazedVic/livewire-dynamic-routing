<div>
    {{ $note->name }}<br>
    @switch($subview)
        @case("details")
            <livewire:notes.menu view="" />
            <livewire:notes.read :note="$note"/>
        @break
        @case("documents")
            <livewire:notes.menu :view="$subview" />
            <livewire:documents.index :owner="$note"/>
        @break
        @default
            {{abort(404)}}
        @break
    @endswitch
</div>
