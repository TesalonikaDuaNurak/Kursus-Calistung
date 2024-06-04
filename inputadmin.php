<?php 
include 'koneksi.php';

if(isset($_POST['daftar'])) {
    $id = $_POST['id'];
    $nama = $_POST['email'];
    $alamat = $_POST['username'];
    $hp = $_POST['password'];

    $sql = "INSERT INTO tb_admin VALUES('$id','$nama','$alamat','$hp')";

    if(empty($nama) || empty($alamat) || empty($hp)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'admin.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Data Admin Berhasil Disimpan');
                window.location = 'admin.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'admin.php';
            </script>
        ";
    }
}

?>
