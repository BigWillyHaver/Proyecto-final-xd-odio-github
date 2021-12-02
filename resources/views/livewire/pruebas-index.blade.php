<div>
<h1>Hola desde el livewire xd {{$nombre}}</h1>
<label for="">Nombre de usuario</label>
<input wire:model="nombre" type= "text">
<br><br><br>
<label for=""> Valor = {{$valor}} </label>
<button wire:click="incrementar" class= "btn btn-primary"> + </button>
<button wire:click="decrementar" class= "btn btn-danger"> - </button>
</div>
