<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Savaris Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>

    @include('partials.navbar')

    <!-- about section -->
    <br>
    <br>
    <section class="about_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <div class="detail-box" data-aos="zoom-in">
                <br>
                <h2>
                  About us
                </h2>
                <p>
                  Savaris Resto adalah Restoran makanan dan minuman yang berada di daerah Surabaya. nama savaris ini diambil dari Saadah, ivan, dan juga faris. mereka bertiga adalah owner dari resto ini. resto ini menawarkan berbagai macam makanan dan minuman seperti chicken cordon bleu, nasi goreng teri medan, kwetiau siram ayam, nasi ayam goreng mentega dan masih banyak menu lainnya. Solaria restoran berusaha memberikan tempat yang nyaman untuk berkumpul bagi para customernya karena solaria, Your Culinary Journey.
                </p>
      <div class="container py-3">
        <div class="row text-center">
            <!-- Card 1 -->
            <div class="col-md-4" data-aos="flip-left">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="image/chef.png" alt="Best Chef Icon" class="img-fluid">
                        </div>
                        <h5 class="card-title">Best Chef</h5>
                        <p class="card-text">Menciptakan setiap hidangan dengan penuh semangat dan presisi, koki kami menghadirkan seni kuliner ke piring Anda.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4" data-aos="flip-up">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="image/menu.png" alt="Quality Food Icon" class="img-fluid">
                        </div>
                        <h5 class="card-title">Quality Food</h5>
                        <p class="card-text">Bersumber dari bahan-bahan segar, setiap gigitan menceritakan kisah rasa, tradisi, dan keunggulan.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4" data-aos="flip-right">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="image/chef-hat.png" alt="Perfect Cook Icon" class="img-fluid">
                        </div>
                        <h5 class="card-title">Perfect Cook</h5>
                        <p class="card-text">Di mana kesempurnaan bertemu rasa, setiap hidangan dimasak untuk memuaskan setiap hasrat Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



              </div>
            </div>
            <div class="col-lg-2 col-md-3">
              <div class="img-box">
                <img src="image/about-img.jpg">
              </div>
            </div>
          </div>
        </div>
      </section>
      
    
      <!-- end about section -->
    
      @include('partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>