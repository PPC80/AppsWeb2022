<x-layouts.admin title='Restaurantes'>

<h5>{{ session('status') }}</h5>
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
                <li class="list-group-item">Tipo de local:  {{$restaurante->category_id_fk}}</li>
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

<a href="{{route('restaurants.index')}}"><h5>Regresar</h5></a>



    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Food</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('food.index') }}"> Editar</a>
                        </div>
                    </div>
                    @foreach ($platos as $food)
                        
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Food Id:</strong>
                            {{$food->food_id }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id Fk:</strong>
                            {{ $food->category_id_fk }}
                        </div>
                        <div class="form-group">
                            <strong>Food Name:</strong>
                            {{ $food->food_name }}
                        </div>
                        <div class="form-group">
                            <strong>Cost:</strong>
                            {{ $food->cost }}
                        </div>
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $food->time }}
                        </div>
                        <div class="form-group">
                            <strong>Visibility:</strong>
                            {{ $food->visibility }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc Fk:</strong>
                            {{ $food->ruc_fk }}
                        </div>

                    </div>
                    @endforeach
      
                </div>
            </div>
        </div>
    </section>

</x-layouts.admin>