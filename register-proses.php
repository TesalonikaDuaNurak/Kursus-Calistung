<?php 
include 'koneksi.php';

if(isset($_POST['register'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $rek = $_POST['rek'];
    $bank = $_POST['bank'];
    $username = $_POST['username'];
    $password = md5($_POST["password"]);

    $sql = "INSERT INTO tb_user VALUES('$id','$nama','$alamat','$hp','$rek','$bank','1', '$username', '$password')";

    if(empty($nama) || empty($alamat) || empty($hp) || empty($rek) || empty($bank) || empty($username) || empty($password)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'register.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Registrasi Berhasil Silahkan login');
                window.location = 'loginuser.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'register.php';
            </script>
        ";
    }
}

?>
