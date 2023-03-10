<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- ganti judul title menjadi "Tambah Data Pegawai" --}}
    <title>Tambah Data Pegawai</title>
  </head>
  <body>

    {{-- ganti teks "Hello World" menjadi Tambah Data Pegawai --}}
    <h1 class="text-center mb-5">Tambah Data Pegawai</h1>


    {{-- buat kode HTML untuk tabel di sini (menggunakan bootstrap) --}}
    {{-- dan kasih container agar tabel agak ke tengah (tidak terlalu lebar) --}}
    <div class="container">

        {{-- beri class justify-content-center agar kartu berada di tengah --}}
        <div class="row justify-content-center">

            {{-- atur banyaknya kolom dengan class col-5 --}}
            <div class="card col-5">
                <div class="card-body">

                    {{-- beri action ke halaman insert data dan isi method dengan POST --}}
                    {{-- kosongkan action --}}
                    <form action="/simpan_perubahan/{{ $data->id }}" method="POST">

                        {{-- lalu wajib menambahkan token --}}
                        @csrf

                        {{-- tambahkan property value, dan isi dengan data yang dikirimkan tadi, lalu ambil nilai dari setiap datanya --}}
                        <div class="form-group">
                          <label for="nama" class="form-label">Nama Pegawai</label>
                          <input name="nama" value="{{ $data->nama }}" type="text" class="form-control" id="nama">
                        </div>

                        {{-- untuk inputan jenis kelamin menggunakan tag option --}}
                        <div class="form-group">
                            <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example" id="jenis-kelamin">
                                <option selected>{{ $data->jenis_kelamin }}</option>
                                <option value="laki">laki</option>
                                <option value="perempuan">perempuan</option>
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="no-telph" class="form-label">No Telphone</label>
                            <input name="no_telph" value="{{ $data->no_telph }}" type="number" class="form-control" id="no-telph">
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input name="alamat" value="{{ $data->alamat }}" type="text" class="form-control" id="alamat">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>

                      </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
