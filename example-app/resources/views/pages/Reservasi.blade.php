@include('auth.login')
@include('auth.register')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Savaris Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    @include('partials.navbar')
    
    <!-- Reservation Form Section -->
    <div class="bg-custom py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="reservation-box text-center">
              <h2>Reservation at Restaurant</h2>

              @if(session('pesan'))
                <div class="alert alert-success text-center">
                  {{ session('pesan') }}
                </div>
              @endif

              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <hr>

              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-find-table" role="tabpanel" aria-labelledby="pills-find-table-tab">
                  <form action="{{ route('reservasi.store') }}" method="POST">
                    @csrf

                    <!-- Input Nama -->
                    <div class="mb-3">
                      <label for="nama_pemesan" class="form-label">Nama:</label>
                      <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control" placeholder="Masukkan nama Anda" value="{{ old('nama_pemesan') }}" required>
                    </div>

                    <!-- Pilihan jumlah orang -->
                    <div class="mb-3">
                      <label for="jumlah_orang" class="form-label">Jumlah Orang:</label>
                      <select name="jumlah_orang" id="jumlah_orang" class="form-select" required>
                        <option value="" disabled selected>Pilih jumlah orang</option>
                        <option value="2" {{ old('jumlah_orang') == 2 ? 'selected' : '' }}>2 orang</option>
                        <option value="3" {{ old('jumlah_orang') == 3 ? 'selected' : '' }}>3 orang</option>
                        <option value="4" {{ old('jumlah_orang') == 4 ? 'selected' : '' }}>4 orang</option>
                        <option value="5" {{ old('jumlah_orang') == 5 ? 'selected' : '' }}>5 orang</option>
                        <option value="6" {{ old('jumlah_orang') == 6 ? 'selected' : '' }}>6 orang</option>
                      </select>
                    </div>

                    <!-- Pilihan tanggal -->
                    <div class="mb-3">
                      <label for="tanggal" class="form-label">Tanggal:</label>
                      <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
                    </div>

                    <!-- Pilihan waktu -->
                    <div class="mb-3">
                      <label for="waktu" class="form-label">Jam:</label>
                      <input type="time" name="waktu" id="waktu" class="form-control" value="{{ old('waktu') }}" required>
                    </div>

                    <!-- Tombol submit -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-success">Pesan Meja</button>
                    </div>
                  </form>
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
