<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
        <button type="button" class="btn btn-success mb-3">Tambah +</button>
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

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
