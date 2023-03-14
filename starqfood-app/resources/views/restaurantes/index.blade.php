<x-layouts.admin title='Restaurantes'>

<h1>Locales Busqueda e información</h1>

<a href="{{ route('restaurants.create') }}">Crear nuevo Local</a>

<h4>{{ session('status') }}</h4>

<div class="contaier ms-5 me-5 ps-5 pe-5 ">
    <form class="input-group" action="">
        <input name="buscarpor" class="form-control rounded" type="search" placeholder="Buscar" aria-label="Search" value="{{$buscarpor}} " search-addon>
        <button type="sumbit" class="btn btn-outline-dark">Buscar</button>
    </form>
</div>

    <br>
    <br>

  
    @foreach ($restaurantes as $restaurante)
    <div class="container row justify-content-md-center">
        <div class="card" style="width: 50%;">
            <img src="{{asset($restaurante->url)}}" class="card-img-top" alt="    {{$restaurante->local_name}}"width="120 px">
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{ route('restaurants.show', $restaurante->ruc) }}"> 
                    {{ $restaurante->local_name }}  
                </a>
            </h5> 
            <p class="card-text">Descripcion:      {{$restaurante->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Dirección:      {{$restaurante->address}}</li>
                <li class="list-group-item" >Dueño/Gerente: {{$restaurante->ower}}</li>
                <li class="list-group-item">Tipo de local:  {{$restaurante->category}}</li>
                <li class="list-group-item">Telefono:  {{$restaurante->local_movil}}</li>
                <li class="list-group-item">Correo:         {{$restaurante->local_email}}</li>
            </ul>
            <div class="container p-2 text-center">
                <a name="editas" id="editar" class="btn btn-primary" href="{{route('restaurants.edit', $restaurante->ruc)}}" role="button" style="width: 130px">Editar</a>
                <form action="{{route('restaurants.destroy', $restaurante->ruc)}}" method="POST">
                    @csrf
                     @method('DELETE')
                    <button type="submit" class="btn btn btn-danger mt-3" style="width: 130px" >Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

</x-layouts.admin>