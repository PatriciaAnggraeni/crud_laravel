<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- ganti judul title menjadi "CRUD Menggunakan Laravel 8" --}}
    <title>CRUD Menggunakan Laravel 8</title>
  </head>
  <body>

    {{-- ganti teks "Hello World" menjadi Data Pegawai --}}
    <h1 class="text-center mb-5">Data Pegawai</h1>


    {{-- buat kode HTML untuk tabel di sini (menggunakan bootstrap) --}}
    {{-- dan kasih container agar tabel agak ke tengah (tidak terlalu lebar) --}}
    <div class="container">

        {{-- membuat tombol untuk tambah data pegawai --}}
        {{-- ganti tag buton dengan tag a, aarahkan link ke tambah data pegawai --}}
        <a href="tambah_data_pegawai" class="btn btn-success mb-3">Tambah +</a>

        <div class="row">
            <table class="table">
                <thead>
                  <tr>

                    {{-- samakan nama kolom tabel dengan nama kolom tabel di database --}}
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No. Telph</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                    {{-- buat anotasi foreach untuk menampilkan data pegawai sesuai dengan jumlahnya (dinamis) --}}
                    @foreach ($data_pegawai as $data_rows)

                        <tr>

                            {{-- echo di laravel menggunakan kurung kurawal ganda --}}
                            <th scope="row"> {{ $data_rows->id }} </th>
                            <td> {{ $data_rows->nama }} </td>
                            <td> {{ $data_rows->jenis_kelamin }} </td>
                            <td> {{ $data_rows->no_telph }} </td>
                            <td> {{ $data_rows->alamat }} </td>
                            <td>
                                {{-- tambahkan tombol untuk melakukan aksi hapus dan edit data pegawai --}}
                                <button type="button" class="btn btn-danger">Hapus</button>
                                <button type="button" class="btn btn-warning">Ubah</button>
                            </td>
                        </tr>

                    @endforeach ()

                </tbody>
              </table>
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
