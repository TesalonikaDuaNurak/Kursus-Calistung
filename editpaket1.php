<?php 
include 'koneksi.php';

if(isset($_POST['daftar'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['harga'];
    $hp = $_POST['ket'];

    $sql = "update tb_paket set nama_paket='$nama', harga_paket='$alamat', ket='$hp' where id_paket='$id'";

    if(empty($nama) || empty($alamat) || empty($hp)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'paket.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Data Paket Berhasil Disimpan');
                window.location = 'paket.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'paket.php';
            </script>
        ";
    }
}

?>
