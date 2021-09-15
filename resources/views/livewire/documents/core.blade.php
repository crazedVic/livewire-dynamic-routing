<div>
    {{ $document->name }}<br>
    subview: {{ $subview }}<br>
    @switch($subview)
        @case("details")
            <livewire:documents.menu view="" />
            <livewire:documents.read :document ="$document"/>
        @break
        @case("notes")
            <livewire:documents.menu :view="$subview" />
            <livewire:notes.index :owner="$document"/>
        @break
    @endswitch
</div>
