<div>
    Document Upload Form<br>

    Department: {{$dept?: 'Any'}}<br>


    <div style="border:1px solid black">
    Name:<input type="text" wire:model="name" style="border: 1px solid black"/><br>
    Description<input type="text" wire:model="description" style="border: 1px solid black"/><br>
    </div>

    <button wire:click="uploadDocument()" style="background-color:lightgreen;border:1px solid black">New Document</button>
</div>
