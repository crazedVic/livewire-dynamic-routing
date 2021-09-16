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
         @case("documents-upload")
            <livewire:documents.upload :owner="$note"/>
        @break
        @case("documents-finance")
            <livewire:notes.menu :view="$subview" />
            <livewire:documents.index :owner="$note" dept="Finance"/>
        @break
        @case("documents-hr")
            <livewire:notes.menu :view="$subview" />
            <livewire:documents.index :owner="$note" dept="HR"/>
        @break
        @case("documents-legal")
            <livewire:notes.menu :view="$subview" />
            <livewire:documents.index :owner="$note" dept="Legal"/>
        @break
        @case("documents-finance-upload")
            <livewire:documents.upload :owner="$note" dept="Finance"/>
        @break
        @case("documents-hr-upload")
            <livewire:documents.upload :owner="$note" dept="HR"/>
        @break
        @case("documents-legal-upload")
            <livewire:documents.upload :owner="$note" dept="Legal"/>
        @break
        @default
            {{abort(404)}}
        @break
    @endswitch
</div>
