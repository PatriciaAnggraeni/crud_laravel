// tampilkan alert dari sweetalert di sini
$('.hapus-data').click( function() {

    // tangkap id dari pegawai di sini
    var idPegawai = $(this).attr('data-id');
    var namaPegawai = $(this).attr('data-nama');

    swal( {

        // mengubah beberapa konfirgurasi dari alert
        title: "Apakah Kamu Yakin?",
        text: "Data Pegawai dengan Nama " + namaPegawai + " Akan Dihapus",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    } ).then((willDelete) => {
        if (willDelete) {

            // jika data berhasil dihapus. maka arahkan halaman ke data pegawai
            window.location = "/hapus_data_pegawai/" + idPegawai + "";

            swal("Data Pegawai Berhasil Dihapus", {
            icon: "success",
        } );
        } else {
          swal("Data Pegawai tidak Jadi Dihapus");
        }
    } );
} );
