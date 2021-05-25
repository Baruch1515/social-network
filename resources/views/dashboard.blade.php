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
  top: -25px;;">Somos {{count($usuarios)}} Usuarios</p>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                <button type="button" id="btnModal" class="btn btn-primary">Nueva Publicacion</button><br><br>
<div id="tvesModal" class="modalContainer">
 <div class="modal-content">


 <span class="close">×</span> <h1>Crea una nueva publicacion</h1>
 <form action="{{ url('/dashboard') }}" method="post"  enctype="multipart/form-data">
 @csrf
	<textarea style="resize: none;" name="descripcion" id="descripcion" cols="50" rows="5" placeholder="Escribe tu publicacion..."></textarea>
	<input style="float: right; width: -250px;" type="file" name="foto" id="foto">
	<input type="submit" class="btn btn-success" value="Guardar"><br>
</form>
</div>
 </div> 

 <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            @foreach($publicaciones as $Publicacion)
		
            <header><h3></h3></header>

                <article class="post" data-postid="{{ $Publicacion->id }}">
				<a  href="{{ url ('perfil/'.$Publicacion->user->id)}}"> <p style="color: #2E86C1 ; ">{{ ($Publicacion->user->name) }}</p></a>
				<p>{{ $Publicacion->descripcion }}</p>
  <img class="card-img-top" src="{{asset('storage').'/'.$Publicacion->foto}}" alt="Card image cap" style="width:254px; height:224px; float:center;">
<p>  <a href="{{ url ('vista-publicacion/'.$Publicacion->id)}}"> Ver Comentarios</a></p><br>
  

                    <p><div class="text-value"></div></p>
                    <div class="info">
                    </div>
                    <div class="interaction">

                    </div>
                </article>
            @endforeach
        </div>
    </section>
 <style>
 .modalContainer {
			display: none; 
			position: fixed; 
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%; 
			overflow: auto; 
			background-color: rgb(0,0,0);
			background-color: rgba(0,0,0,0.4);
		}

		.modalContainer .modal-content {
			background-color: #fefefe;
			margin: auto;
			padding: 20px;
			border: 1px solid lightgray;
			border-top: 10px solid #58abb7;
			width: 60%;
		}

		.modalContainer .close {
			color: #aaaaaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.modalContainer .close:hover,
		.modalContainer .close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
 </style>

 <script>
function validar(){
	document.getElementById("descripcion");
}
 if(document.getElementById("btnModal")){
			var modal = document.getElementById("tvesModal");
			var btn = document.getElementById("btnModal");
			var span = document.getElementsByClassName("close")[0];
			var body = document.getElementsByTagName("body")[0];

			btn.onclick = function() {
				modal.style.display = "block";

				body.style.position = "static";
				body.style.height = "100%";
				body.style.overflow = "hidden";
			}

			span.onclick = function() {
				modal.style.display = "none";

				body.style.position = "inherit";
				body.style.height = "auto";
				body.style.overflow = "visible";
			}

			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";

					body.style.position = "inherit";
					body.style.height = "auto";
					body.style.overflow = "visible";
				}
			}
		}
 </script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
