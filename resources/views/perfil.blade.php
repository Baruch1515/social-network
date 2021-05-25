<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <p style="float: ;">Bienvenido {{ Auth::user()->name }}</p>
			<p style="float: right;  position: relative;
  top: -25px;;">Somos {{count($contador)}} Usuarios</p>


        </h2>
    </x-slot>
        <div>
        <div class="wrapper">

  <div class="container">
    <aside class="center">
      <span>{{ $usuarios->name}}</span><br>
      <span> Correo electronico: {{ $usuarios->email}} </span>
      <span>Se unio el  {{$usuarios->created_at}}</span>

    </aside>
<body>
</body>

</div>

<style>

.wrapper{

  margin: 10px auto;
  margin: 0;
  padding: 0;
}


.container {
  display: flex;
  height: 10em;
}

aside {
  background: #EAEDED;
  float: left;
  width: 30%;
  height: 170%;


}




.center {
  text-align: center;
  line-height: 4em;
  font-weight: bold;
}

</style>
        </div>
    </x-app-layout>

