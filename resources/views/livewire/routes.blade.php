<div>
    @if(!$core)
        <livewire:firms.index />
    @else
        @switch(get_class($core))
            @case("App\\Models\Note")
                <livewire:notes.core :note="$core" :subview="$subview" :parents="$parents"/>
            @break
            @case("App\\Models\Firm")
                <livewire:firms.core :firm="$core" :subview="$subview" :parents="$parents"/>
            @break
            @case("App\\Models\Document")
                <livewire:documents.core :document="$core" :subview="$subview" :parents="$parents"/>
            @break

            @case("App\\Models\Employee")
                <livewire:employees.core :employee="$core" :subview="$subview" :parents="$parents"/>
            @break
            @case("App\\Models\Lead")
                <livewire:leads.core :lead="$core" :subview="$subview" :parents="$parents"/>
            @break
        @endswitch
    @endif
</div>
