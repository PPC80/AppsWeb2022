<x-layouts.admin title="Resturantes">

    <h1>REGISTRO</h1>





    <div >
        <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data" class="container ps-5 pe-5 ms-5 me-5 ">
            @csrf
            <label>RUC del Local</label>
            <input type="text" class="form-control" name="RucLocal" value="{{ old('RucLocal') }}">
            @error('RucLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Nombre del Restaurante</label>
            <input type="text" class="form-control" name="nombreRestaurante" value="{{ old('nombreRestaurante') }}">
            @error('nombreRestaurante')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Direccion del local</label>
            <input type="text" class="form-control" name="direccionLocal" value="{{ old('direccionLocal') }}">
            @error('direccionLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Telefono fijo del Local</label>
            <input type="text" class="form-control" name="TelefonoFijoLocal" value="{{ old('TelefonoFijoLocal') }}">
            @error('TelefonoFijoLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Telefono movil del Local</label>
            <input type="text" class="form-control" name="TelefonoMovilLocal" value="{{ old('TelefonoMovilLocal') }}">
            @error('TelefonoMovilLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Descripcion del Local</label>
            <input type="text" class="form-control" name="DescripcionLocal" value="{{ old('DescripcionLocal') }}">
            @error('DescripcionLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Gerente del local</label>
            <input type="text" class="form-control" name="nombreGerente" value="{{ old('nombreGerente') }}">
            @error('nombreGerente')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Foto</label>
            <input type="file" class="form-control"  name="fotoLocal" value="{{ old('fotoLocal') }}">
            @error('fotoLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Tipo de Local</label>
            <br>

            <div class="form-group">
                {{ Form::select('category_id_fk',$category, ['class' => 'form-control' . ($errors->has('category_id_fk') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('category_id_fk', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <br>
            <label>Direccion de E-mail</label>
            <input type="text" class="form-control" name="correoLocal" value="{{ old('correoLocal') }}">
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
