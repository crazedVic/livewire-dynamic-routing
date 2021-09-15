<div>
    {{ $document->name }}<br>
    subview: {{ $subview }}<br>
    @switch($subview)
        @case("notes")
            {{-- <livewire:employees.menu :active="$subview" /> --}}
            <livewire:notes.index :owner="$document"/>
        @break
    @endswitch
</div>
