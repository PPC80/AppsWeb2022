@csrf
<label class="uppercase text-gray-700 text-xs">Nombre de alumno</label>
<span> @error('nombre') {{$message}} @enderror </span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4"
value="{{ old('title', $nota->nombre) }}">

{{-- <label class="uppercase text-gray-700 text-xs">URL</label>
<span> @error('slug') {{$message}} @enderror </span>
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4"
value="{{ old('slug', $post->slug) }}"> --}}

<label class="uppercase text-gray-700 text-xs">Nota de alumno</label>
<span> @error('nota') {{$message}} @enderror </span>
<textarea name="body" class="rounded border-gray-200 w-full mb-4"
rows="5">{{ old('body', $nota->nota) }}</textarea>
<div class="flex justify-between items-center">
    <a href="{{ route('notas.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
