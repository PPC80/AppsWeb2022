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

        <h1>Ubicaciones</h1>
        <div class="content">

            <div class="mapform" >

                <div id="map" style="height:600px; width: 1000px;" class="my-3"></div>

                <script>
                    function initMap() {
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 16,
                            center: {lat: -0.21035505038459548, lng: -78.4905286369323}
                        });
                        @foreach($locations as $location)
                            var marker = new google.maps.Marker({
                                position: {lat: {{$location->latitude}}, lng: {{$location->longitude}}},
                                map: map,
                                icon: {
                                    url: "{{ asset('image/burger.png') }}",
                                    scaledSize: new google.maps.Size(35, 35)
                                },
                                label: {
                                    color: "#FFFFFF"
                                },
                                title: "Comida"
                            });
                        @endforeach
                    }
                </script>

                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwDUvb2-_ZS6PZuqu_w1tWuHSdGwDvRa0&callback=initMap"
                        type="text/javascript"></script>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>

</html>
