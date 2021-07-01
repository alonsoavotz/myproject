<div>
    <div>
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div>
            <input type="text" wire:model="task">
        </div>
    
    @error('task') 
        <span class="error">{{ $message }}</span>
    @enderror
    </div>
   <button wire:click="addTask()">Agregar</button>
   <div>
       <ul>
           @foreach ($tasks as $item)
               <li>{{ $item }}</li>
           @endforeach
       </ul>
   </div>
</div>
