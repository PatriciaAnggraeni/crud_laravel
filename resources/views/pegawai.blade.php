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

        {{-- membuat kolom search berdasarkan nama pegawai --}}
        <div class="row g-3 align-items-center" >
            <div class="col-auto" >

                {{-- membuat form untuk melakukan request, yaitu mengambil data berdasarkan asil pencarian --}}
                <form action="/data_pegawai" method="GET">
                    <input type="search" name="search" id="input-search" class="form-control" placeholder="Cari data pegawai...">
                </form>
            </div>
        </div>

        <div class="row">

            {{-- buat kondisi jika pesan menerima sebuah seesion --}}
            @if ( $pesan = Session::get('berhasil') )

                {{-- taruh alert di sini --}}
                <div class="alert alert-success mt-3" role="alert">
                    tampilkan pesannya
                    <b> {{ $pesan }} </b>
                </div>

            @endif

            <table class="table">
                <thead>
                  <tr>

                    {{-- samakan nama kolom tabel dengan nama kolom tabel di database --}}
                    <th scope="col">Nomor</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No. Telph</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                    {{-- buat anotasi foreach untuk menampilkan data pegawai sesuai dengan jumlahnya (dinamis) --}}
                    {{-- beri variabel index untuk mengambil index dari data pegawai --}}
                    @foreach ($data_pegawai as $index => $data_rows)

                        <tr>

                            {{-- echo di laravel menggunakan kurung kurawal ganda --}}
                            {{-- tambahkan index dengan method firstItem() --}}
                            <th scope="row"> {{ $index + $data_pegawai->firstItem() }} </th>

                            <td>
                                {{-- menampilkan gambar sesuai dengan nama file yang diterima --}}
                                {{-- fungsi asset akan mengarah ke folder public --}}
                                <img src="{{ asset('foto_pegawai/'.$data_rows->foto) }}" alt="" width="100px">
                            </td>

                            <td> {{ $data_rows->nama }} </td>
                            <td> {{ $data_rows->jenis_kelamin }} </td>
                            <td> {{ $data_rows->no_telph }} </td>
                            <td> {{ $data_rows->alamat }} </td>

                            {{-- bisa juga mengatur format tampilan waktu --}}
                            {{-- note: akan muncul error jika data pada salah satu kolom bernilai null --}}
                            {{-- <td> {{ $data_rows->created_at -> format('D M Y') }} </td> --}}

                            {{-- menggunakan method diffForHumans() --}}
                            <td> {{ $data_rows->created_at->diffForHumans() }} </td>
                            <td>
                                {{-- tambahkan tombol untuk melakukan aksi hapus dan edit data pegawai --}}
                                <a href="/edit_data/{{ $data_rows->id }}" class="btn btn-warning">Ubah</a>

                                {{-- tambahkan properti data-id untuk mengambil id dari data pegawai --}}
                                <a href="#" class="btn btn-danger hapus-data" data-id="{{ $data_rows->id }}" data-nama="{{ $data_rows->nama }}">Hapus</a>
                            </td>
                        </tr>

                    @endforeach ()

                </tbody>
              </table>

              {{ $data_pegawai->links() }}
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

    {{-- tambahkan JQuery CDN --}}
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>

    {{-- hubungkan dengan TOASTR CDN js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- menambahkan sweetalert (dialog konfirmasi) --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- hubungkan file js sweetalert dengan view pegawai --}}
    <script src="{{ asset('js/sweetalert.js') }}"></script>

  </body>
</html>
