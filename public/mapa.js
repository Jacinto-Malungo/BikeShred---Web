import { Loader } from "@googlemaps/js-api-loader";

const loader = new Loader({
    apiKey: 'AIzaSyA5M8cEKQhzyASmT9I776InU_b7fCYH4lk',
    version: "weekly",
});

loader.load().then(() => {
    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -23.5505, lng: -46.6333 },
        zoom: 12,
    });

    // Adicione seu código para personalizar o mapa aqui

    //const bikeStations = @json($stations)

    const marker = new google.maps.Marker({
        position: { lat: -47.890, lng: -57.907 },
        map: map,
        title: 'Kilamba'
    });


});