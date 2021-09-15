<div>
    {{ $note->name }}<br>
    @switch($subview)
        @case("details")
            <livewire:notes.menu view="" />
            <livewire:notes.read :note ="$note"/>
        @break
        @case("notes")
            <livewire:notes.menu :view="$subview" />
            <livewire:documents.index :owner="$note"/>
        @break
    @endswitch
</div>
