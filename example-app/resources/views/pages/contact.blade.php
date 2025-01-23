<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Savaris Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  </head>
  <body>

    @include('partials.navbar')
    <h1>Contact Us</h1>
            <p>Terima kasih telah mengunjungi website Restoran Savaris.</p>
            <h2>OPEN FOR DINE-IN</h2>
            <p>11.00 – 22.00 Wib</p>
            <a href="reservasi.html" class="btn-reservasi">Reservasi</a>
            <div class="info">
                <p><strong>Telepon:</strong> +62 895-6148-06151</p>
                <p><strong>WhatsApp:</strong> +62 895-6148-06151</p>
                <p><strong>Instagram:</strong> <a href="https://instagram.com/savarisresto" target="_blank">@Savarisresto</a></p>
                <p><strong>Email:</strong> savaris_resto.sby@gmail.com</p>
            </div>
            <h3>Alamat</h3>
            <p>Jl. Pahlawan No.99 Surabaya</p>
    <div class="container">
        <div class="map-container">
            <div id="map" style="height: 450px; width: 100%;"></div>
        </div>
        <h3 class="order-title">Order Now</h3>
        <div class="order-now">
            <a href="https://www.gofood.com" target="_blank">
                <img src="/images/gofood.png" alt="GoFood">
            </a>
            <a href="https://www.grabfood.com" target="_blank">
                <img src="/images/grabfood.png" alt="GrabFood">
            </a>
            <a href="https://shopeefood.com" target="_blank">
                <img src="/images/Shopee.png" alt="Shopee Food">
            </a>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-7.319925, 112.770088], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        
        var locations = [
            { name: 'Cabang 1', lat: -7.319925, lng: 112.770088 },
            { name: 'Cabang 2', lat: -7.817019, lng: 112.061357 },
            { name: 'Cabang 3', lat: -6.946015, lng: 107.612573 }
        ];

        locations.forEach(function(location) {
            L.marker([location.lat, location.lng]).addTo(map)
                .bindPopup(location.name);
        });
    </script>
  </body>
</html>
