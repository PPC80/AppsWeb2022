@php
    $imagenPlato = URL::asset('image/logo.svg');
    $foods=$restaurant->foods;
   
    $ruc=$restaurant->ruc; 
    
    
    $foodsCategories=$foods->groupBy('category');

@endphp

<div class="container">
    <nav class="p-0 m-0">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link" id="nav-indexfood-tab" data-bs-toggle="tab" data-bs-target="#nav-indexfood"
                type="button" role="tab" aria-controls="nav-indexfood" aria-selected="false">Habilitar
                Platos</button>
            <button class="nav-link" id="nav-addFood-tab" data-bs-toggle="tab" data-bs-target="#nav-addFood"
                type="button" role="tab" aria-controls="nav-addFood" aria-selected="true">Añadir Platos</button>
                <button class="nav-link" id="nav-addLocate-tab" data-bs-toggle="tab" data-bs-target="#nav-addLocate"
                type="button" role="tab" aria-controls="nav-addLocate" aria-selected="true">Añadir Ubicación</button>
        </div>
    </nav>
    <div class="tab-content p-0 m-0" id="nav-tabContent" style="width: 100%">
        {{-- --------------------------------- --- -Segmento  indexfood---------------------------------------------------------------- --}}
        <div class="tab-pane fade show p-0 m-0" style="width: 100%"id="nav-indexfood" role="tabpanel"
            aria-labelledby="nav-indexfood-tab">
            <hr>
            @foreach ($foodsCategories as $foods)
    
                @if (isset($foods[0]))
               <h3>{{$foods[0]->category->category}}</h3>
               @endif
               <hr>
               
               @foreach ($foods as $food)

               <div class="row align-items-center mt-2">
                <div class="col-12 col-md-9"  id="componenteA{{$food->food_id}}">
                    <x-partials.food.show :food="$food"/>
                </div>
                <div class="col-12 col-md-9" style="display:none;" id="componenteB{{$food->food_id}}">
                    <x-partials.food.edit :food="$food" :categories="$categories"/>
                </div>
                <div class="col-12 col-md-3" >
                    <button type="button" onclick="alternarComponente('componenteA{{$food->food_id}}', 'componenteB{{$food->food_id}}', this)" class="d-md-block btn btn-primary" style="min-width:15vw; width: 100px">Editar</button>
                    <br>
                    <a href="#" class="d-md-block btn btn-danger" style="min-width:15vw; width: 100px">Eliminar</a>
                </div>

               </div>


               @endforeach
               <hr>
            @endforeach
            <script src="/js/admin/editView.js"></script>

        </div>

        {{-- ---------------------------------------------------------------------------------------------- --}}
        <div class="tab-pane fade show p-0 m-0" style="width: 100%; min-height:10vw" id="nav-addFood" role="tabpanel"
            aria-labelledby="nav-addFood-tab">
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center" id="preview">
                                <img src={{ $imagenPlato }} class="img-fluid" alt="Imagen plato" id="image0">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Añadir al Menú </b></h5>
                                    <form method="POST" action={{route('foods.store',['ruc' =>$restaurant->ruc])}}
                                        role="form" enctype="multipart/form-data">
                                        @csrf
                                        <label class="form-label" for="category_id_fk">Categoria de plato:
                                        </label>
                                        <select class="form-select" aria-label="Seleccione Categoria"
                                            name="category_id_fk" id="category_id_fk">
                                            <option selected>Seleccione una Categoria </option>
                                            @foreach ($categories as $category)
                                                <option value={{ $category->category_id }}>
                                                    {{ $category->category }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id_fk')
                                            <x-partials.menssageError message="Seleccione una categoria" />
                                        @enderror
                                        <br>
                                        <label class="form-label" for="food_name">Nombre del plato : </label>
                                        <input type="text" name="food_name" id="food_name" class="form-control"
                                            value="{{ old('food_name') }}" class="form-control">
                                        @error('food_name')
                                            <x-partials.menssageError message='{{$message}}' />
                                        @enderror
                                        <br>
                                        <label class="form-label" for="cost">Precio: </label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="text" name="cost" id="cost"
                                                value="{{ old('cost')}}" class="form-control" placeholder="Ejemplo: 10.30">
                                        </div>
                                        @error('cost')
                                            <x-partials.menssageError message='{{$message}}' />
                                        @enderror
                                        <br>
                                        <label class="form-label" for="wait_time">Tiempo de espera en minutos: </label>
                                        <input type="text" name="wait_time" id="wait_time" value="{{ old('wait_time') }}"
                                            class="form-control">
                                        @error('wait_time')
                                            <x-partials.menssageError message={{$message}} />
                                        @enderror
                                        <br>
                                        <input type="hidden" name="ruc_fk" id="ruc_fk"
                                            value={{ $restaurant->ruc }} class="form-control">
                                        <label for="image"><b>Imagen del plato (Opcional):</b> </label>
                                        <input type="file" name="image" accept="image/png, image/gif, image/jpeg"
                                            class="form-control p-2 m-2" content="Imagen" id="image" />
                                        @error('image')
                                            <x-partials.menssageError message={{$message}} />
                                        @enderror
                                        <div class="container text-center">
                                             <input class="btn btn-outline-success mt-3" type="submit" value="Guardar" style="min-width:20vw; width: 100px">
                                        </div>

                                    </form>
                                    <script src="/js/admin/preview2.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        {{-- ---------------------------------------------------------------------------------------- --}}

        <div class="tab-pane fade show p-0 m-0" style="width: 100%; min-height:10vw" id="nav-addLocate" role="tabpanel"
            aria-labelledby="nav-addLocate-tab">

            <div class="content">
                <form action={{route('locations.store')}} method="post" id="miFormulario">
                    @csrf
                      <input type="text" name="ruc" id="ruc" value={{$ruc}} class="form-control">
                      <script>
                        function enviarFormulario() {
                          // Obtener el valor del input
                          var valorInput = document.getElementById("ruc_fk").value;

                          // Agregar el valor como campo oculto al formulario
                          var campoOculto = document.createElement("input");
                          campoOculto.type = "hidden";
                          campoOculto.name = "campoOculto";
                          campoOculto.value = valorInput;
                          document.getElementById("miFormulario").appendChild(campoOculto);

                          // Enviar el formulario
                          document.getElementById("miFormulario").submit();
                        }
                        </script>

                    <div class="mapform" >
                        <div class="row">
                            <div class="col-5">
                                <input type="hidden" class="form-control" placeholder="lat" name="lat" id="lat">
                            </div>
                            <div class="col-5">
                                <input type="hidden" class="form-control" placeholder="lng" name="lng" id="lng">
                            </div>
                        </div>

                        <div id="map" style="height:400px; width: 800px;" class="my-3"></div>

                        <script>
                            let map;
                            function initMap() {
                                map = new google.maps.Map(document.getElementById("map"), {
                                    center: { lat: -0.21035505038459548, lng: -78.4905286369323 },
                                    zoom: 16,
                                    scrollwheel: true,
                                });

                                const uluru = { lat: -0.21035505038459548, lng: -78.4905286369323 };
                                let marker = new google.maps.Marker({
                                    position: uluru,
                                    map: map,
                                    draggable: true
                                });
                                google.maps.event.addListener(marker,'position_changed',
                                    function (){
                                        let lat = marker.position.lat()
                                        let lng = marker.position.lng()
                                        $('#lat').val(lat)
                                        $('#lng').val(lng)
                                    })
                                google.maps.event.addListener(map,'click',
                                function (event){
                                    pos = event.latLng
                                    marker.setPosition(pos)
                                })
                            }
                        </script>

                    </div>

                    <input type="submit" class="btn btn-primary" onclick="enviarFormulario()">
                </form>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwDUvb2-_ZS6PZuqu_w1tWuHSdGwDvRa0&callback=initMap"
                type="text/javascript"></script>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>




        </div>
    </div>
</div>
