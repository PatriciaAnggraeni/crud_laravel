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
                    {{-- tambahkan property ectype agar form dapat menerima inputan berupa file --}}
                    <form action="/masukkan_data_pegawai" method="POST" enctype="multipart/form-data">

                        {{-- lalu wajib menambahkan token --}}
                        @csrf

                        <div class="form-group">
                          <label for="nama"">Nama Pegawai</label>
                          <input name="nama" type="text" class="form-control" id="nama">
                        </div>

                        {{-- untuk inputan jenis kelamin menggunakan tag option --}}
                        <div class="form-group">
                            <label for="jenis-kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example" id="jenis-kelamin">
                                <option selected>--Pilih Jenis Kelamin--</option>
                                <option value="laki">laki</option>
                                <option value="perempuan">perempuan</option>
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="no-telph">No Telphone</label>
                            <input name="no_telph" type="number" class="form-control" id="no-telph">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="alamat">
                        </div>

                        {{-- tambahkan kolom untuk input file gamabr --}}
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input name="foto" type="file" class="form-control" id="foto">
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
