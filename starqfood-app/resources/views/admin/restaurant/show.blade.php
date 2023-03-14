@php
    $nameRest = $restaurant->local_name;
@endphp

<x-layouts.admin title={{ $nameRest }}>

    <div class="d-flex align-items-center justify-content-between ps-4 pe-3">
        <h1>{{ $restaurant->local_name }}</h1>
        <small>{{ $restaurant->updated_at->diffForHumans() }}</small>
    </div>
    <div class="card">
        <div class="position-relative" style="height: 25vw;">
            <img src="{{ $restaurant->image->url ?? 'https://res.cloudinary.com/dpptziu2k/image/upload/v1674111594/StarRestaurants/web_image/photo-1600891964599-f61ba0e24092_ry8ses.jpg' }}"
                alt="..." class="d-block w-100 position-absolute bottom-0 start-50 translate-middle-x">
        </div>

        <div class="card-body p-sm-3 p-md-4 p-lg-5">
            <b>Descrición:</b><br>

            @if (isset($restaurant->description))
                <p class="card-text ms-3">{{ $restaurant->description }}</p>
            @else
                <p class="card-text ms-3">Este es un restaurante más, registrado en esta plataforma :D ..... <br>

                    Uno de los mejores restaurantes para visitar se llama <b>{{ $restaurant->local_name }}</b> . Está
                    ubicado en el centro de la ciudad,
                    ofreciendo una experiencia gastronómica única. El ambiente es relajante y acogedor, con una
                    decoración contemporánea y moderna. La comida es exquisita, con una variada selección de platos
                    tanto para los amantes de la comida tipica como para los amantes de la comida internacional.
                </p>
            @endif

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Categoria:</b><br>
                    <p class="card-text ms-3">{{ $restaurant->category->category }}</p>
                </li>
                <li class="list-group-item"><b>RUC/RIMPE:</b><br>
                    <p class="card-text ms-3">{{ $restaurant->ruc }}</p>
                </li>
                <li class="list-group-item"><b>Dirección:</b><br>
                    <p class="card-text ms-3">{{ $restaurant->address }}</p>
                </li>
                <li class="list-group-item"><b>Dueño/Gerente:</b><br>
                    <p class="card-text ms-3">{{ $restaurant->ower }}</p>
                </li>

                @if (isset($restaurant->local_email))
                    <li class="list-group-item"><b>Correo: </b><br>
                        <p class="card-text ms-3">{{ $restaurant->local_email }}</p>
                    </li>
                @endif
                @if (isset($restaurant->local_tel))
                    <li class="list-group-item"><b>Telefono:</b><br>
                        <p class="card-text ms-3">{{ $restaurant->local_tel }}</p>
                    </li>
                @endif
                @if (isset($restaurant->local_movil))
                    <li class="list-group-item"><b>Movil:</b><br>
                        <p class="card-text ms-3">{{ $restaurant->local_movil }}</p>
                    </li>
                @endif

            </ul>
        </div>
    </div>
    <hr>

    <div class="container p-5">
        <form>
            <label for="commentario" class="form-label"><b>Comentarios:</b></label>

            <input type="hidden" name="user_id_fk" value={{Auth::user()->user_id}}>
            <input type="hidden" name="ruc_fk" value={{$restaurant->ruc}}>

            <textarea class="form-control" name="comment" rows='3' id='commentario' placeholder="Introduzca aquí sus comentarios" name="commentary">

            </textarea>
            <button class="btn btn-dark mt-2" type="submit" style="width: 160px;">Enviar</button>
        </form>
    </div>
</x-layouts.admin>
