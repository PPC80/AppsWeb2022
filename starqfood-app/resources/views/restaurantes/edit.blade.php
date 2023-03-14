<x-layouts.admin title="Resturantes">

    <h1>ACTUALIZAR LOCAL</h1>





    <div >
        <form action="{{ route('restaurants.update',$restaurante   ) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PATCH')
            <label>RUC del Local</label>
            <input type="text" class="form-control" name="RucLocal" value="{{ old('RazonSocial',$restaurante->ruc) }}">
            @error('RucLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Nombre del Restaurante</label>
            <input type="text" class="form-control" name="nombreRestaurante" value="{{ old('RazonSocial',$restaurante->local_name) }}">
            @error('nombreRestaurante')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Direccion del local</label>
            <input type="text" class="form-control" name="direccionLocal" value="{{ old('RazonSocial',$restaurante->address) }}">
            @error('direccionLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Telefono fijo del Local</label>
            <input type="text" class="form-control" name="TelefonoFijoLocal" value="{{ old('RazonSocial',$restaurante->local_tel) }}">
            @error('TelefonoFijoLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Telefono movil del Local</label>
            <input type="text" class="form-control" name="TelefonoMovilLocal" value="{{ old('RazonSocial',$restaurante->local_movil) }}">
            @error('TelefonoMovilLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Descripcion del Local</label>
            <input type="text" class="form-control" name="DescripcionLocal" value="{{ old('RazonSocial',$restaurante->description) }}">
            @error('DescripcionLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Gerente del local</label>
            <input type="text" class="form-control" name="nombreGerente" value="{{ old('RazonSocial',$restaurante->ower ) }}">
            @error('nombreGerente')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
        <label>Foto Actual</label>
        <img class="form-control" name="fotoActual" src="{{asset($url)}}" alt="    {{$restaurante->local_name}}"   width="120 px">  
        <br>

        <br>
            <label>Foto Nueva</label>
            <input type="file" class="form-control"  name="fotoLocal" value="{{ old('fotoLocal') }}">
            @error('fotoLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror

            <br>
            <label>Tipo de Local</label>
            <br>
            <label> Restaurante:
                <input type="radio" name="categoriaLocal" value="Restaurante">
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Comida Rapida:
                <input type="radio" name="categoriaLocal" value="Comida Rapida" value=">
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Cafeteria:
                <input type="radio" name="categoriaLocal" value="Cafeteria" >
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Bar:
                <input type="radio" name="categoriaLocal" value="Bar" >
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Miselanea:
                <input type="radio" name="categoriaLocal" value="Miselanea" >
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <br>
            <label>Direccion de E-mail</label>
            <input type="text" class="form-control" name="correoLocal" value="{{ old('categoriaLocal',$restaurante->local_email) }}">
            @error('correoLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <div id="botones">
                <button class="btn btn-outline-success" type="submit">Registrar</button>
            </div>


        </form>
    </div>

    <a href="{{ route('restaurants.index') }}">
        <h1>Regresar</h1>
    </a>


</x-layouts.admin>
