<!DOCTYPE html>
<html>

<head>
    <title>Bike Stations</title>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Bike Stations</h1>

    <div id="map"></div>

    <script>
        function initMap() {
            var bikeStations = @json($bikeStations);

            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -8.91404,
                    lng: 13.3276
                },
                zoom: 10
            });

            bikeStations.forEach(function(station) {
                var marker = new google.maps.Marker({
                    position: {
                        lat: station.latitude,
                        lng: station.longitude
                    },
                    map: map,
                    title: station.name
                });

                marker.addListener('click', function() {
                    window.location.href = '/bike-stations/' + station.id;
                });
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5M8cEKQhzyASmT9I776InU_b7fCYH4lk&callback=initMap"></script>
</body>

</html>


{{--
    GOOGLE_MAPS_API_KEY=AIzaSyA5M8cEKQhzyASmT9I776InU_b7fCYH4lk

    --}}
