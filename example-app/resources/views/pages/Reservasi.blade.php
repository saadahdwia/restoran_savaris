
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
@include('partials.navbar')
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

        @include('partials.footer')
</body>

</html>