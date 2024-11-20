<?php
// Sertakan koneksi database
include 'koneksi.php';

// Proses data ketika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jumlah_orang = $_POST['jumlah_orang'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];

    // Simpan data ke database
    $sql = "INSERT INTO reservasi (jumlah_orang, tanggal, waktu) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $jumlah_orang, $tanggal, $waktu);

    if ($stmt->execute()) {
        $pesan = "Reservasi berhasil! Kami akan menghubungi Anda segera.";
    } else {
        $pesan = "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow py-3">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./image/Logo 1.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

              <li class="nav-item">
                <a class="nav-link" href="../restoran_savaris/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../restoran_savaris/about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../restoran_savaris/menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../restoran_savaris/Reservasi.php">Reservasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../restoran_savaris/contact.php">contact</a>
              </li>
            </ul>
            <a href="#" class="btn btn-brand">Order Online</a>
          </div>
        </div>
    </nav>

     <!-- Reservation Form Section -->

     <div class="bg-custom">
     <div class="container">
     <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="reservation-box text-center">
                    <h2>Reservation at Restaurant</h2>

                    <?php if (isset($pesan)): ?>
                        <div class="alert alert-info text-center">
                        <?php echo $pesan; ?>
                        </div>
                    <?php endif; ?>

                
                    <hr>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-find-table" role="tabpanel" aria-labelledby="pills-find-table-tab">
                            <form action="" method="POST" class="">
                                <div class="row mb-3">
                                <label for="jumlah_orang" class="form-label">Jumlah Orang:</label>
                                    <div class="col">
                                    <select name="jumlah_orang" id="jumlah_orang" class="form-select" required>
                                        <option value="" disabled selected>Pilih jumlah orang</option>
                                        <option value="2">2 orang</option>
                                        <option value="3">3 orang</option>
                                        <option value="4">4 orang</option>
                                        <option value="5">5 orang</option>
                                        <option value="6">6 orang</option>
                                    </select>
                                    </div>
                                    <!-- Pilihan tanggal -->
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal:</label>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                                    </div>
                                    <!-- Pilihan waktu -->
                                    <div class="mb-3">
                                        <label for="waktu" class="form-label">Jam:</label>
                                        <input type="time" name="waktu" id="waktu" class="form-control" required>
                                    </div>
                                </div>
                                    <!-- Tombol submit -->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success">Pesan Meja</button>
                                    </div>
                            </form>

                            <!-- YOUR DETAILS Section -->
                    <!-- <div class="tab-pane fade" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab">
                        <form>
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
                            </div>
                            <div class="mb-3">
                                <label for="specialRequest" class="form-label">Special Requests</label>
                                <textarea class="form-control" id="specialRequest" rows="3" placeholder="Any special requests?" optional></textarea>
                            </div>
                            <button type="submit" class="btn btn-custom w-100">Submit Details</button>
                        </form>
                    </div>
                </div> -->

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        </div>

        <!-- Footer Section -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- Logo and Social Media -->
                    <div class="col-md-2" >
                        <img src="./image/Logo 1.png" height="50" width="1">
                    </div>
                    
                    <!-- Links Section -->
                    <div class="col-md-2">
                        <ul class="list-unstyled">
                            <li><a href="#">Food Menu</a></li>
                            <li><a href="#">Gallery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-unstyled">
                            <li><a href="#">Book Order</a></li>
                            <li><a href="#">Our Chefs</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-unstyled">
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact Information -->
                    <div class="col-md-4">
                        <ul class="list-unstyled contact-info">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                              </svg>
                                <i class="bi bi-telephone"></i> (209) 555-0104</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                              </svg>
                                <i class="bi bi-envelope"></i> SAVARIS@mail.com</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                              </svg>
                                <i class="bi bi-geo-alt"></i> Surabaya, Indonesia</li>
                        </ul>
                        <p>Follow us</p>
                        <div class="social-icons">
                            <p></p>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                              </svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                              </svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                              </svg></a>
                        </div>
                    </div>
                </div>
                
                <!-- Copyright Section -->
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright © 2024 SAVARIS. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>