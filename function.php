<?php

session_start();

// Koneksi
$con = mysqli_connect('localhost','root','','kasir');

// Login
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password' ");
    $count = mysqli_num_rows($check);

    if ($count > 0) {
        $_SESSION['login'] = 'True';
        header('location:index.php');
    }
    else {
        echo '
        <script>alert("Username dan Password salah");
        window.location.href="login.php"
        </script>';
    }
}

if (isset($_POST['tambahbarang'])) {    
    $kodeproduk = $_POST['kode_produk'];
    $namaproduk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $insert = mysqli_query($con, "INSERT INTO produk (kode_produk,nama_produk,deskripsi,stok,harga) VALUES ('$kodeproduk','$namaproduk','$deskripsi','$stok','$harga')");

    if ($insert) {
        header('location:stock.php');
    }
    else {
        echo '
        <script>alert("Gagal Menambah Barang");
        window.location.href="stock.php"
        </script>';
    }
}

if (isset($_POST['tambahpelanggan'])) {    
    $namapelanggan = $_POST['nama_pelanggan'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $insert = mysqli_query($con, "INSERT INTO pelanggan (nama_pelanggan,no_telp,alamat) VALUES ('$namapelanggan','$no_telp','$alamat')");

    if ($insert) {
        header('location:pelanggan.php');
    }
    else {
        echo '
        <script>alert("Gagal Menambah Pelanggan");
        window.location.href="pelanggan.php"
        </script>';
    }
}

if (isset($_POST['tambahpesanan'])) {    
    $idpelanggan = $_POST['idpelanggan'];

    $insert = mysqli_query($con, "INSERT INTO pesanan (idpelanggan) VALUES ('$idpelanggan')");

    if ($insert) {
        header('location:index.php');
    }
    else {
        echo '
        <script>alert("Gagal Menambah Pelanggan");
        window.location.href="index.php"
        </script>';
    }
}

if (isset($_POST['addproduk'])) {    
    $idproduk = $_POST['idproduk'];
    $idp = $_POST['idp'];
    $qty = $_POST['qty'];

    $insert = mysqli_query($con, "INSERT INTO detailpesanan (idproduk,idpesanan,qty) VALUES ('$idproduk','$idp','$qty')");

    if ($insert) {
        header('location:view.php?idp='.$idp);
    }
    else {
        echo '
        <script>alert("Gagal Menambah Produk");
        window.location.href="view.php?idp"'.$idp.'
        </script>';
    }
}

?>