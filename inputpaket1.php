<?php 
include 'koneksi.php';

if(isset($_POST['daftar'])) {
    $id = $_POST['id_paket'];
    $nama = $_POST['nama_paket'];
    $alamat = $_POST['harga_paket'];
    $hp = $_POST['ket'];

    $sql = "INSERT INTO tb_paket VALUES('$id','$nama','$alamat','$hp')";

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
