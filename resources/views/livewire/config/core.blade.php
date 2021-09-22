<div>
    @switch($subview)
        @case('home')
            <livewire:base.menu-component view="" render="livewire.config.menu"/>
            <livewire:config.home/>
        @break
        @case('example')
            <livewire:base.menu-component :view="$subview" render="livewire.config.menu"/>
            <livewire:config.example-page :number="1"/>
        @break
        @case("example-example")
            <livewire:base.menu-component :view="$subview" render="livewire.config.menu"/>
            <livewire:config.example-page :number="2"/>
        @break
        @case("example-example-example")
            <livewire:base.menu-component :view="$subview" render="livewire.config.menu"/>
            <livewire:config.example-page :number="3"/>
        @break
        @default
            {{abort(404)}}
        @break
    @endswitch
</div>
