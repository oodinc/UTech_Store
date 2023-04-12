<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTech Store | Database</title>

    <!-- icon link  -->
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="css/style_database.css">

</head>
<body>

    <!-- header section start -->
    <header>
        <a href="" class="logo"><img src="img/logo.png">UTech Store | Database</a>
    </header>
    <!-- header section end -->
<section>
	<div class="box-container">
	<h3>Daftar Pesanan</h3>
	<table>
		<tr>
			<th>No.</th>
			<th>Nama Pemesan</th>
			<th>Alamat</th>
			<th>Nomor Telepon</th>
			<th>Waktu Pemesanan</th>
		</tr>
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

		// menyiapkan query SQL untuk mengambil data dari tabel
		$sql = "SELECT * FROM `order`";
		$result = mysqli_query($conn, $sql);

		// memeriksa apakah query berhasil dieksekusi dan apakah ada data yang ditemukan
		if (mysqli_num_rows($result) > 0) {
			// menampilkan data ke dalam tabel
			$i = 1;
		    while($row = mysqli_fetch_assoc($result)) {
		        echo "<tr>";
		        echo "<td>" . $i . "</td>";
		        echo "<td>" . $row["namaPemesan"] . "</td>";
		        echo "<td>" . $row["alamat"] . "</td>";
		        echo "<td>" . $row["nomor"] . "</td>";
		        echo "<td>" . $row["waktu_pemesanan"] . "</td>";
		        echo "</tr>";
		        $i++;
		    }
		} else {
		    echo "Tidak ada data yang ditemukan.";
		}

		// menutup koneksi ke database
		mysqli_close($conn);
		?>
	</table>
	</div>
	</section>
</body>
</html>
