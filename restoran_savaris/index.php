<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/style.css"
    </head>
  <body>

  <?php include ('./n&f/navbar.php'); ?>

    <!-- Slieder -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">

            <div class="carousel-item text-center bg-cover vh-100 active slide-1">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class=".col-lg-8">
                            <h6 class="text-white">WELCOME TO SAVARIS</h6>
                            <h1 class="display-1 text-white">Nikmati Cita Rasa Kuliner Terbaik</h1>
                            <a href="#" class="btn btn-brand">Reservasi</a>
                        </div>
                    </div>
              </div>
            </div>

            <div class="carousel-item text-center bg-cover vh-100 slide-2">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class=".col-lg-8">
                            <h6 class="text-white">WELCOME TO SAVARIS</h6>
                            <h1 class="display-1 text-white">Langsung dari dapur kami ke meja Anda</h1>
                            <a href="#" class="btn btn-brand">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item text-center bg-cover vh-100 slide-3">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class=".col-lg-8">
                            <h6 class="text-white">WELCOME TO SAVARIS</h6>
                            <h1 class="display-1 text-white">Rasakan pengalaman kuliner yang tak tertanding</h1>
                            <a href="#" class="btn btn-brand">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <section id="menu">

        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1>Jelajahi Menu Kita</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid repellat ab magni nemo autem ipsa nulla ex aut nisi! Quia necessitatibus, magni numquam possimus accusantium sed magnam praesentium error facere?</p>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-makanan-tab" data-bs-toggle="pill" data-bs-target="#pills-makanan" type="button" role="tab" aria-controls="pills-makanan" aria-selected="true">Makanan</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-minuman-tab" data-bs-toggle="pill" data-bs-target="#pills-minuman" type="button" role="tab" aria-controls="pills-minuman" aria-selected="true">Minuman</button>
                </li>

            </ul>
    
            <div class="tab-content" id="pills-tabContent">
                
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menu1.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Brownis Telur</a></h5>
                                <p class="small">Brownis telur, lembut, manis, dengan aroma telur yang khas.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menu2.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Pai Berry</a></h5>
                                <p class="small">Pai berry manis, lezat dengan sentuhan buah alami.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menu3.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Fillet Ikan Dengan Sayur</a></h5>
                                <p class="small">Fillet ikan lembut disajikan dengan sayuran segar nan sehat.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menu4.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Salad Segar</a></h5>
                                <p class="small">Salad vegetarian segar, penuh gizi untuk gaya hidup sehat.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menudrink1.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Sparkling Lemon</a></h5>
                                <p class="small">Nikmati kesegaran sparkling lemon yang menggugah selera.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menudrink2.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Jus Apel</a></h5>
                                <p class="small">Jus apel alami, manis, dan menyegarkan setiap saat.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menudrink3.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Air Selasih</a></h5>
                                <p class="small">Air selasih sehat, kaya manfaat untuk tubuhmu.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menudrink4.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Teh Chamomile</a></h5>
                                <p class="small">Teh chamomile menenangkan, sempurna untuk relaksasi harianmu.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade show" id="pills-makanan" role="tabpanel" aria-labelledby="pills-makanan-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menu1.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Brownis Telur</a></h5>
                                <p class="small">Brownis telur, lembut, manis, dengan aroma telur yang khas.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menu2.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Pai Berry</a></h5>
                                <p class="small">Pai berry manis, lezat dengan sentuhan buah alami.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menu3.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Fillet Ikan Dengan Sayur</a></h5>
                                <p class="small">Fillet ikan lembut disajikan dengan sayuran segar nan sehat.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menu4.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Salad Segar</a></h5>
                                <p class="small">Salad vegetarian segar, penuh gizi untuk gaya hidup sehat.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="tab-pane fade show" id="pills-minuman" role="tabpanel" aria-labelledby="pills-minuman-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menudrink1.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Sparkling Lemon</a></h5>
                                <p class="small">Nikmati kesegaran sparkling lemon yang menggugah selera.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menudrink2.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Jus Apel</a></h5>
                                <p class="small">Jus apel alami, manis, dan menyegarkan setiap saat.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menudrink3.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Air Selasih</a></h5>
                                <p class="small">Air selasih sehat, kaya manfaat untuk tubuhmu.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white bayangan-di-hover">
                                <img src="./image/Menudrink4.jpg" alt="" class="menu-gambar">
                                <div class="item-menu-content p-4">

                                    <span>Rated (5.0)</span>
                                    <span class="bintang">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    
                                </div>
                                <h5 class="my-2"><a href="#">Teh Chamomile</a></h5>
                                <p class="small">Teh chamomile menenangkan, sempurna untuk relaksasi harianmu.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>

    </section>

    <?php include ('./n&f/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
