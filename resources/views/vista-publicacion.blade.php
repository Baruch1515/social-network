<!-- JavaScript Bundle with Popper -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- CSS only -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <p style="float: ;">Bienvenido {{ Auth::user()->name }}</p>
			<p style="float: right;  position: relative;
  top: -25px;;">Somos {{count($contador)}} Usuarios</p>



        </h2>
    </x-slot>



<body>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('storage').'/'.$publicaciones->foto}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $publicaciones->descripcion }}</h5>
    <p class="card-text"></p>
  </div>
</div>

<div>
@comments(['model' => $publicaciones])

</div>
        </div>
        </body>
</x-app-layout>

