<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mapa</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family:  sans-serif;
        }
    </style>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="content">

            <div class="mapform" >

                <div id="map" style="height:400px; width: 800px;" class="my-3"></div>

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
                                    url: 'images/burger.png',
                                    scaledSize: new google.maps.Size(35, 35)
                                },
                                // label: {
                                //     text: "Restaurante",
                                //     color: "#FFFFFF"
                                // },
                                // title: "Comida"
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
