<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTech Store</title>

    <!-- icon link  -->
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- js swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section start -->
    <header>
        <a href="#home" class="logo"><img src="img/logo.png">UTech Store</a>

        <nav class="navbar">
            <a class="active" href="#home">beranda</a>
            <a href="#dishes">informasi</a>
            <a href="#about">tentang</a>
            <a href="#order">pesan</a>
            <a href="#review">ulasan</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-icon"></i>
            <i class="fa fa-user"></i>
            <i class="fas fa-bars" id="menu-bars"></i>
        </div>

    </header>
    <!-- header section end -->

    <!-- search form -->

    <form action="" id="search-form">
        <input type="search" placeholder="Type to search.." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section start -->

    <section class="home" id="home">
        <div class="swiper mySwiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content content1">
                        <span>hidangan spesial</span>
                        <h3>aneka jus buah</h3>
                    </div>
                    <div class="image image1">
                        <img src="img/1.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>hidangan spesial</span>
                        <h3>rujak buah</h3>
                    </div>
                    <div class="image">
                        <img src="img/rujak buah.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>hidangan spesial</span>
                        <h3>salad buah</h3>
                    </div>
                    <div class="image">
                        <img src="img/salad buah.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>hidangan spesial</span>
                        <h3>sop buah</h3>
                    </div>
                    <div class="image">
                        <img src="img/sop buah.png" alt="">
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- home section end -->

    <!-- dishes section start -->
    <section class="dishes" id="dishes">
        <h3 class="sub-heading">informasi</h3>
        <h3 class="heading">hidangan favorit</h3>
        <div class="box-container"></div>
    </section>
    <!-- dishes section end -->

    <!-- about section start  -->
    <section class="about" id="about">
        <h3 class="sub-heading">tentang kami</h3>
        <h1 class="heading">mengapa memilih kami?</h1>

        <div class="row">
            <div class="image">
                <img src="img/12.png" alt="">
            </div>
            <div class="content">
                <h3>minuman sehat dan segar</h3>
                <p>Selamat datang di Utech Store, marketplace yang menyediakan minuman buah sehat dan segar untuk menjaga kesehatan dan kebugaran Anda.</p>
                <p>Kami mengerti bahwa kemudahan dan kenyamanan dalam berbelanja adalah hal yang penting bagi pelanggan kami. Oleh karena itu, kami menawarkan sistem Free Delivery (COD) dan Pengiriman Cepat agar pelanggan kami dapat menikmati minuman buah segar kami tanpa perlu repot keluar rumah. Tidak hanya itu, kami juga menawarkan Gratis Ongkir untuk sebagian besar daerah yang kami layani agar Anda dapat menghemat biaya pengiriman.</p>
                <p>Tunggu apa lagi? Pesan dan nikmati minuman buah sehat dan segar dengan kemudahan dan kenyamanan berbelanja yang tak tertandingi. Jadilah bagian dari komunitas kami yang peduli akan kesehatan dan kelezatan yang seimbang!</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shopping-bag"></i>
                        <span>free delivery (COD)</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-motorcycle"></i>
                        <span>pengiriman cepat</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-money-bill"></i>
                        <span>gratis ongkir</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end  -->

    <!-- order section start  -->
    <section class="order" id="order">
        <form method="POST" action="halaman_Checkout.php" id="myForm" onsubmit="return validateForm()">
            <h3 class="sub-heading">pesan sekarang!</h3>
            <h1 class="heading">rasakan kesegarannya</h1>

            <div class="box-container">

                <div class="box" id="jus-alpukat" data-dish-name="Jus Alpukat">
                    <div class="image">
                        <img src="img/jus alpukat.png" alt="">
                        <button type="button" onclick="addStar('Jus Alpukat')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>Jus Alpukat</h3>
                        <p>Jus krimi dengan rasa lembut dan creamy, kaya akan nutrisi dan tinggi kandungan serat alami. Cocok untuk pencinta rasa manis dan sehat.</p>
                        <span class="price">Rp7.000</span>

                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk1" pattern="[0-9]+" type="number" name="jumlahProduk1" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer1"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan1" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="jus-apel" data-dish-name="Jus Apel">
                    <div class="image">
                        <img src="img/jus apel.png" alt="">
                        <button type="button" onclick="addStar('Jus Apel')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>jus apel</h3>
                        <p>Jus segar dengan cita rasa manis asam, kaya akan vitamin C dan antioksidan. Cocok untuk penggemar rasa asam dan menyehatkan tubuh.</p>
                        <span class="price">Rp7.000</span>
                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk2" pattern="[0-9]+" type="number" name="jumlahProduk2" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer2"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan2" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="jus-jambu" data-dish-name="Jus Jambu">
                    <div class="image">
                        <img src="img/jus jambu.png" alt="">
                        <button type="button" onclick="addStar('Jus Jambu')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>Jus Jambu</h3>
                        <p>Jus manis dengan aroma khas buah jambu, kaya akan serat alami dan vitamin C. Cocok untuk pencinta rasa manis dan sehat.</p>
                        <span class="price">Rp7.000</span>

                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk3" pattern="[0-9]+" type="number" name="jumlahProduk3" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer3"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan3" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="jus-jeruk" data-dish-name="Jus Jeruk">
                    <div class="image">
                        <img src="img/jus jeruk.png" alt="">
                        <button type="button" onclick="addStar('Jus Jeruk')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>Jus Jeruk</h3>
                        <p>Jus segar dengan cita rasa asam manis, kaya akan vitamin C dan antioksidan. Cocok untuk penggemar rasa asam dan menyegarkan tubuh.</p>
                        <span class="price">Rp7.000</span>

                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk4" pattern="[0-9]+" type="number" name="jumlahProduk4" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer4"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan4" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="jus-nanas" data-dish-name="Jus Nanas">
                    <div class="image">
                        <img src="img/jus nanas.png" alt="">
                        <button type="button" onclick="addStar('Jus Nanas')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>Jus Nanas</h3>
                        <p>Jus segar dengan rasa manis dan asam yang seimbang, kaya akan enzim bromelain dan vitamin C. Cocok untuk pencinta rasa manis dan sehat.</p>
                        <span class="price">Rp7.000</span>

                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk5" pattern="[0-9]+" type="number" name="jumlahProduk5" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer5"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan5" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="jus-semangka" data-dish-name="Jus Semangka">
                    <div class="image">
                        <img src="img/jus semangka.png" alt="">
                        <button type="button" onclick="addStar('Jus Semangka')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>Jus Semangka</h3>
                        <p>Jus segar dengan rasa manis dan segar, kaya akan kandungan air dan vitamin C. Cocok untuk penggemar rasa segar dan menyegarkan tubuh.</p>
                        <span class="price">Rp7.000</span>

                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk6" pattern="[0-9]+" type="number" name="jumlahProduk6" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer6"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan6" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="jus-stroberi" data-dish-name="Jus Stroberi">
                    <div class="image">
                        <img src="img/jus stroberi.png" alt="">
                        <button type="button" onclick="addStar('Jus Stroberi')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>Jus Stroberi</h3>
                        <p>Jus manis dengan rasa segar dan aroma khas stroberi, kaya akan vitamin C dan antioksidan. Cocok untuk pencinta rasa manis dan sehat.</p>
                        <span class="price">Rp7.000</span>

                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk7" pattern="[0-9]+" type="number" name="jumlahProduk7" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer7"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan7" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="rujak-buah" data-dish-name="Rujak Buah">
                    <div class="image">
                        <img src="img/rujak buah.png" alt="">
                        <button type="button" onclick="addStar('Rujak Buah')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>Rujak Buah</h3>
                        <p>Campuran buah-buahan segar dengan saus pedas manis yang lezat dan sehat, cocok untuk mengembangkan selera baru dan sehat.</p>
                        <span class="price">Rp10.000</span>

                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk8" pattern="[0-9]+" type="number" name="jumlahProduk8" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer8"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan8" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="salad-buah" data-dish-name="Salad Buah">
                    <div class="image">
                        <img src="img/salad buah.png" alt="">
                        <button type="button" onclick="addStar('Salad Buah')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>Salad Buah</h3>
                        <p>Campuran buah-buahan segar dengan saus rasa manis yang segar, kaya akan serat alami dan vitamin C. Cocok untuk pencinta rasa segar dan sehat.</p>
                        <span class="price">Rp10.000</span>

                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk9" pattern="[0-9]+" type="number" name="jumlahProduk9" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer9"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan9" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="sop-buah" data-dish-name="Sop Buah">
                    <div class="image">
                        <img src="img/sop buah.png" alt="">
                        <button type="button" onclick="addStar('Sop Buah')" class="fas fa-heart"></button>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star">0</i>
                        </div>
                        <h3>Sop Buah</h3>
                        <p>Campuran buah-buahan segar dengan kuah santan yang lezat dan sehat, cocok untuk penggemar rasa santan dan sehat.</p>
                        <span class="price">Rp10.000</span>

                        <div class="inputBox">
                            <div class="input">
                                <span>jumlah :</span>
                                <input id="jumlahProduk10" pattern="[0-9]+" type="number" name="jumlahProduk10" min="0"
                                    placeholder="masukkan jumlah pesanan">
                            </div>
                            <div class="inputBox">
                                <div class="input2">
                                    <span>pilih kategori :</span>
                                    <div id="radioButtonContainer10"></div>
                                </div>
                            </div>
                            <div class="inputBox">
                                <div class="input">
                                    <span>catatan :</span>
                                    <textarea name="catatan10" placeholder="masukkan catatan" pattern="[A-Z a-z]+" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="inputBox">
                    <div class="input">
                        <span>nama</span>
                        <input type="text" name="nama" pattern="[A-Z a-z]+" placeholder="masukkan nama" required>
                    </div>
                    <div class="input">
                        <span>alamat</span>
                        <textarea name="alamat" placeholder="masukkan alamat" id="" cols="30" rows="10"
                            required></textarea>
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>no. whatsapp</span>
                        <input type="text" name="nomor" pattern="[0-9]+" placeholder="masukkan nomor" minlength="10"
                            maxlength="13" required>
                    </div>
                    <div class="input">
                        <span>tanggal dan waktu pemesanan</span>
                        <input type="datetime-local" name="waktu_pemesanan" required>
                    </div>

                </div>
            </div>
            <input type="submit" formaction="/halaman_Checkout.php" value="checkout" class="btn">
        </form>
    </section>
    <!-- order section start  -->

    <!-- review section start -->
    <section class="review" id="review">
        <h3 class="sub-heading">ulasan pelanggan</h3>
        <h1 class="heading">apa yang mereka katakan?</h1>

        <div class="swiper mySwiper review-slider">
            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/13.png" alt="">
                        <div class="user-info">
                            <h3>dominic tottero</h3>
                        </div>
                    </div>
                    <p>Saya sangat menyukai jus alpukat dari Utech Store! Rasanya lezat dan segar, dan teksturnya yang lembut membuatnya sangat nikmat. Selain itu, kandungan lemak baik dan serat alami yang terdapat dalam jus alpukat membuat saya merasa lebih sehat setelah meminumnya. Terima kasih Utech Store!</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/14.png" alt="">
                        <div class="user-info">
                            <h3>aulia</h3>
                        </div>
                    </div>
                    <p>Jus semangka dari Utech Store benar-benar menyegarkan, terutama di hari-hari yang panas. Saya suka cara membuatnya menjadi jus yang segar dengan sedikit gula. Selain itu, kandungan vitamin C dan antioksidan yang baik untuk kulit dan jantung membuat saya merasa lebih sehat setelah meminumnya.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/15.png" alt="">
                        <div class="user-info">
                            <h3>peter parkur</h3>
                        </div>
                    </div>
                    <p>Saya sangat senang dengan sistem Free Delivery (COD) dan Pengiriman Cepat dari Utech Store. Ini sangat membantu saya yang sibuk dan tidak punya waktu untuk keluar rumah untuk membeli minuman buah segar. Selain itu, Gratis Ongkir untuk sebagian besar daerah juga menjadi nilai tambah yang besar!</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="img/16.png" alt="">
                        <div class="user-info">
                            <h3>tissu</h3>
                        </div>
                    </div>
                    <p>Saya suka salad buah dari Utech Store! Buah-buahannya segar dan saus yang digunakan tidak terlalu manis, membuatnya menjadi makanan ringan yang sehat dan enak. Selain itu, kandungan serat, vitamin, dan antioksidan dalam salad buah sangat baik untuk kesehatan. Baguus ntuk jadi langganan</p>
                </div>

            </div>
        </div>
    </section>
    <!-- review section end -->

    <!-- footer section start-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>lokasi</h3>
                <a href="https://www.google.com/maps" target="_blank">jawa</a>
                <a href="https://www.google.com/maps" target="_blank">sumatra</a>
                <a href="https://www.google.com/maps" target="_blank">kalimantan</a>
                <a href="https://www.google.com/maps" target="_blank">sulawesi</a>
                <a href="https://www.google.com/maps" target="_blank">papua</a>
            </div>

            <div class="box">
                <h3>link cepat</h3>
                <a href="#home">beranda</a>
                <a href="#dishes">informasi</a>
                <a href="#about">tentang</a>
                <a href="#order">pesan</a>
                <a href="#review">ulasan</a>
            </div>

            <div class="box">
                <h3>hubungi kami</h3>
                <a href="http://www.wasap.my/6281909561200" target="_blank">+62 819 0956 1200</a>
                <a href="https://www.instagram.com/direct/t/340282366841710300949128165706432124526" target="_blank"
                    style="text-transform: none;">@m_saifuddin711</a>
                <a href="mailto:masoodinc1@gmail.com" target="_blank"
                    style="text-transform: none;">masoodinc1@gmail.com</a>
            </div>

            <div class="box">
                <h3>ikuti kami</h3>
                <a href="https://www.instagram.com/m_saifuddin711" target="_blank">instagram</a>
                <a href="https://www.facebook.com/pedangagama.islam.7/" target="_blank">facebook</a>
                <a href="https://github.com/oodinc" target="_blank">gitHub</a>
            </div>
        </div>

        <div class="credit"><i class="far fa-copyright"></i> 2023 Udin Technology</div>
    </section>
    <!-- footer section end-->

    <!-- loader start -->
    <div class="loader">
        <div class="spinner"></div>
    </div>
    <!-- loader end -->


























    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- link js -->
    <script src="js/script.js"></script>

</body>

</html>