<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Savaris Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/style.css"
</head>
  <body>

    @include('partials.navbar')
    
    <body>
        <div class="container">
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
            <div class="map-container">
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.20960987199!2d112.630280414473!3d-7.275612006014132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1737038177350!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
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
    </body>

    @include('partials.footer')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>