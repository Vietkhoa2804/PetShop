//map
function initMap() {
    const location = { lat: 16.047079, lng: 108.206230 }; // Vị trí mặc định (New York)
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: location,
    });
    const marker = new google.maps.Marker({
        position: location,
        map: map,
    });
}

// Tải API Google Maps
function loadScript() {
    const script = document.createElement("script");
    script.src = `https://maps.googleapis.com/maps/api/js?key=AIzaSyBga4b8cRlbHLYspZctWz9No0-PJAaBjnY&callback=initMap`;
    script.async = true;
    script.defer = true;
    document.head.appendChild(script);
}

document.addEventListener("DOMContentLoaded", loadScript);