<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/ubicaciones.css') }}">
</head>
<body>
    <a href="./restaurante.html" class="cta">
        <svg viewBox="0 0 13 10" height="15px" width="20px">
            <path d="M12,5 L2,5"></path>
            <polyline points="5 1 1 5 5 9"></polyline>
        </svg>
        <span>Regresar</span>
    </a>

    <div class="container">

        <div class="content">
            <form action="{{ route('store') }}" method="post">
                @csrf

                <select name="ruc" id="ruc" class="form-select" aria-label="Default select example" name="user_id_fk">
                    <option selected  value=>Seleccione Afiliado</option>
                    @foreach ($restaurants as $restaurant)
                      <option value={{$restaurant->ruc}}>{{$restaurant->local_name}}</option>
                    @endforeach
                  </select>

                  {{-- {{$restaurants}} --}}

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
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwDUvb2-_ZS6PZuqu_w1tWuHSdGwDvRa0&callback=initMap"
                            type="text/javascript"></script>
                </div>

                <input type="submit" class="btn btn-primary">
            </form>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>

</html>
