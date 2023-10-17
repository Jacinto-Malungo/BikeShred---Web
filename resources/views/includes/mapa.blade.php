<div id="map"></div>
<script>
    function exibirCard() {
        content: '<p>HTML Content</p>'
    }
    function initMap() {

        var bikeStations = @json($bikeStations);

        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: -8.91404,
                lng: 13.3276,
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

            // Evento de clique no indicador
            marker.addListener('click', exibirCard);
        });
    }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5M8cEKQhzyASmT9I776InU_b7fCYH4lk&callback=initMap"></script>
