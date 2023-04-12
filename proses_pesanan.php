<?php
// membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webjus";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// memeriksa apakah koneksi berhasil dibuat
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// menyiapkan query SQL untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO `order` (namaPemesan, alamat, nomor, waktu_pemesanan) VALUES ('".$_POST['namaPemesan']."', '".$_POST['alamat']."', '".$_POST['nomor']."', '".$_POST['waktu_pemesanan']."')";

// mengeksekusi query dan memeriksa apakah data berhasil dimasukkan
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan ke dalam tabel.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// menutup koneksi ke database
mysqli_close($conn);
header("Location: halaman_thankyou.php");
exit;
?>