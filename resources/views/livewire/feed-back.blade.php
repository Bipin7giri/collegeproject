<div>
    <!-- component -->
    <div>
        <label for="fname">Name</label><br>
        <input type="text" wire:model="name"><br>
        <label for="lname">email</label><br>
        <input type="text" wire:model="email"><br><br>
        <label for="lname">address</label><br>
        <input type="text"  wire:model="address"><br><br>
        <label for="lname">comment</label><br>
        <input type="text" wire:model="comment"><br><br>
        <button type="submit" wire:click="save()">add</button>
    </div> 
</div>
