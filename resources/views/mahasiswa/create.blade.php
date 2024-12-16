<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1>Halaman Tambah Mahasiswa</h1>

    <div class="col-sm-6">
      <h4>Form Mahasiswa</h4>

      @if ($errors->any())
        <div class="pt-3">
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif

      <form action="/mahasiswa" method="POST">
        @csrf
        <div class="row mb-3">
          <div class="col-sm-4">
            <label for="npm">NPM</label>
            <input type="number" name="npm" class="form-control" placeholder="Input NPM" value="{{ Session::get('npm') }}">
          </div>
          <div class="col-sm-4">
            <label for="nama_mahasiswa">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama Mahasiswa" value="{{ Session::get('nama_mahasiswa') }}">
          </div>
          <div class="col-sm-4">
            <label for="jk">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-select">
              <option>L</option>
              <option>P</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-5">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ Session::get('tgl_lahir') }}">
          </div>
          <div class="col-sm-7">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Input Alamat" value="{{ Session::get('alamat') }}">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <button class="btn btn-primary w-100" type="submit">Simpan</button>
          </div>
          <div class="col-sm-6">
            <a href="/mahasiswa" class="btn btn-secondary w-100">Kembali</a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
