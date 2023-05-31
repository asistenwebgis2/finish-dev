<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- site metas -->
    <title>WebGIS Sebaran Faskes dan Tenkes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shorcut icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <style>
        /*Warna teks*/
        .t_putih {
            color: white;
        }
    </style>

</head>

<body style="background-color: #273036; margin: auto">
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#" style="float: left"><a href="#"><img src="<?= base_url() ?>assets/images/Sleman.jpg" alt="Logo Kab. Sleman" style="width: 50px; height: 60px" /></a><b style="text-indent: 10px;"> Kabupaten Sleman</b> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#map"><b>Map</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"><b>Seputar Kesehatan</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><b>Contact</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><b>About Me</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://regpus.kemkes.go.id/login" target="blank"><b>Login/sign up</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Akhir Navbar -->
    <!-- About Webgis -->
    <div style="text-align: center; background-repeat: no-repeat; background-attachment: fixed;background-size: cover; background-image: url('<?= base_url() ?>assets/images/Healt.jpeg'); background-color: #f5deb3" id="home">
        <br />
        <br />
        <br />
        <br />
        <br />
        <img src="<?= base_url() ?>assets/images/Sehat1.jpg" class="img-thumbnail" alt="Logo Kesehatan" style="width: 200px; height: 200px; border-radius: 70%" /> <br />
        <br />

        <p style="color: black;">
            <b style="font-size:30px">Selamat Datang di Pusat Informasi Sebaran Faskes dan Tenaga Kesehatan <br> Kabupaten Sleman </b> <br>
        <p style="font-size:23px; color: black;"> WebGIS ini ditujukan untuk memberikan informasi mengenai sebaran fasilitas kesehatan dan tenaga kesehatan. <br> Di dalam WebGIS ini ditampilkan informasi sebaran rumah sakit, puskesmas, dan klinik, serta chloroplet tenaga kesehatan <br> per kecamatan di Kabupaten Sleman, Yogykarta. </p>
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#273036" fill-opacity="1" d="M0,192L60,181.3C120,171,240,149,360,170.7C480,192,600,256,720,240C840,224,960,128,1080,96C1200,64,1320,96,1380,112L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </div>
    <!-- Akhir About Webgis-->
    <!-- Map -->
    <div id="map" style="margin: center; text-align:center;">
        <br> <br> <br>
        <!-- memangil web -->
        <iframe src="<?= base_url() ?>/home" width="1340" height="650"></iframe>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f5deb3" fill-opacity="1" d="M0,0L48,0C96,0,192,0,288,48C384,96,480,192,576,229.3C672,267,768,245,864,208C960,171,1056,117,1152,122.7C1248,128,1344,192,1392,224L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <!-- Akhir Map -->
    <!-- Seputar Kesehatan -->
    <section style="background-color: #f5deb3; border: 2px solid wheat; padding-top: 100px; padding-bottom: 30px" style="color: black" id="about">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <h2 style="border: 0px solid wheat; padding-bottom: 1px; text-align: center; color: black"><b>Seputar Kesehatan</b></h2>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active container" style="float: left">
                    <table>
                        <td style="width: 10%"></td>
                        <td style="width: 45%; text-align: center">
                            <img src="<?= base_url() ?>assets/images/Kesehatan.png" class="img-thumbnail" alt="Logo Kesehatan" style="width: 400px; height: 400px; border-radius: 100%" />
                        </td>
                        <td style="width: 45%; text-align: justify">
                            <p>
                                <b style="font-size: 20px">Kesehatan</b> <br /> Kesehatan merupakan hal yang sangat didambakan oleh semua orang. Kesehatan menjadi salah satu faktor keberlangsungan hidup manusia. Sehat didefinisikan sebagai suatu keadaan sehat baik secara fisik, mental, spiritual maupun sosial yang memungkinkan setiap orang untuk hidup produktif secara sosial dan ekonomis.
                                Berangkat dari pengertian diatas, dapat diketahui bahwa kesehatan merupakan hal yang luas dan bukan hanya kesehatan secara fisik. Agar kita tetap sehat perlu adanya usaha yang harus dilakukan seperti rajin olahraga, makan-makanan sehat, rajin beribadah, peduli terhadap mental, dan lainnya. Jadi, mari kita jaga kesehatan karena sehat itu mahal tiada taranya.
                            </p>
                        </td>
                    </table>
                </div>
                <div class="carousel-item container" style="float: left">
                    <table>
                        <tr>
                            <td style="width: 10%"></td>
                            <td style="width: 45%; text-align: center">
                                <img src="<?= base_url() ?>assets/images/RS.jpg" class="img-thumbnail" alt="Gambar faskes" style="object-position: center; width: 400px; height: 400px; border-radius: 100%; float: left" />
                            </td>
                            <td style="width: 45%; text-align: justify">
                                <p>
                                    <b style="font-size: 20px">Fasilitas Kesehatan</b> <br /> Fasilitas kesehatan adalah fasilitas pelayanan yang digunakan untuk menyelenggarakan upaya pelayanan kesehatan perseorangan, baik promotif, preventif, kuratif maupun rehabilitatif. Ada banyak macam faskes seperti rumah sakit, puskesmas, dan klinik. Fasilitas kesehatan menjadi hal yang sangat esensial mengingat kesehatan menjadi kebutuhan yang mendasar bagi setiap manusia.
                                    Kesehatan adalah tanggung jawab bersama dari setiap individu, masyarakat, pemerintah, dan swasta. Adapun peran yang dimainkan oleh pemerintah, tanpa kesadaran individu dan masyarakat untuk secara mandiri menjaga kesehatan mereka, hanya sedikit tujuan yang akan tercapai. Perilaku yang sehat dan kemampuan masyarakat untuk memilih dan mendapatkan pelayanan kesehatan yang bermutu sangat menentukan keberhasilan pembangunan kesehatan.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="carousel-item container" style="float: left">
                    <table>
                        <tr>
                            <td style="width: 10%"></td>
                            <td style="width: 45%; text-align: center">
                                <img src="<?= base_url() ?>assets/images/tenagakes.png" class="img-thumbnail" alt="gambar tenaga kesehatan" style="object-position: center; width: 400px; height: 400px; border-radius: 100%; float: left" />
                            </td>
                            <td style="width: 45%; text-align: justify">
                                <p>
                                    <b style="font-size: 20px">Tenaga Kesehatan</b> <br /> Tenaga kesehatan berdasarkan UU RI Tentang Kesehatan No 36 tahun 2014 merupakan setiap orang yang mengabdikan diri dalam bidang kesehatan serta memiliki pengetahuan dan keterampilan melalui pendidikan di bidang kesehatan untuk jenis tertentu yang memerlukan kewenangan dalam melakukan upaya kesehatan.
                                    Tenaga kesehatan memiliki peranan penting untuk meningkatkan kualitas pelayanan kesehatan yang maksimal kepada masyarakat agar masyarakat mampu meningkatkan kesadaran, kemauan, dan kemampuan hidup sehat sehingga mampu mewujudkan derajat kesehatan yang setinggi-tingginya sebagai investasi bagi pembangunan sumber daya manusia yang produktif secara sosial dan ekonomi.
                                    Tenaga kesehatan memiliki beberapa petugas yang dalam kerjanya saling berkaitan yaitu dokter, dokter gigi, perawat, bidan, dan tenagaan medis lainnya.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="carousel-item container" style="float: left">
                    <table>
                        <tr>
                            <td style="width: 10%"></td>
                            <td style="width: 45%; text-align: center">
                                <img src="<?= base_url() ?>assets/images/Life.jpg" class="img-thumbnail" alt="Logo IMAGIS" style="object-position: center; width: 400px; height: 400px; border-radius: 100%; float: left" />
                            </td>
                            <td style="width: 45%; text-align: justify">
                                <p>
                                    <b style="font-size: 20px">Urgensi Faskes dan Tenkes</b> <br /> Fasilitas kesehatan dan tenaga kesehatan merupakan dua hal yang tidak dapat dipisahkan. Fasilitas kesehatan merupakan tempat praktik kesehatan dan tenaga kesehatan menjadi penggerak fasilitas kesehatan.
                                    Kelengkapan dan kelayakan fasilitas kesehatan pada setiap tingkat sangat diperlukan guna meningkatkan taraf kesehatan masyarkat. Tidak hanya itu, hal tersebut juga harus ditunjang dengan kompotensi dan pengalaman yang mumpuni dari seluruh tenaga kesehatan.
                                    Pemerataan fasilitas dan tenaga kesehatan juga merupakan hal yang sangat urgen untuk meningkatkan pemerataan kesehatan. Akan tetapi, perlu adanya tunjangan kesadaran dan pemeliharaan kesehatan dari masing-masing individu masyarakat agar kesehatan masyarakat senantiasa terjaga.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f5deb3" fill-opacity="1" d="M0,320L48,314.7C96,309,192,299,288,256C384,213,480,139,576,106.7C672,75,768,85,864,117.3C960,149,1056,203,1152,218.7C1248,235,1344,213,1392,202.7L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <!-- Akhir Seputar Kesehatan -->
    <!-- Kontak -->
    <section id="contact" style="border: 2px solid #273036; padding-top: 100px; padding-bottom: 30px">
        <div style="border: 0px solid wheat; padding-bottom: 1px; text-align: center; color: white">
            <div style="text-align: center" class="t_putih">
                <table class="container">
                    <tr>
                        <td style="text-align: center; width: 40%; border: solid 2px white">
                            <h2><b>Contact</b></h2>

                            <img src="<?= base_url() ?>assets/images/Logo_of_the_Ministry_of_Health_of_the_Republic_of_Indonesia.png" alt="Logo Kemenkes" style="width: 750px; height: 250px; border-radius: 50%" /> <br />
                            <br />
                            <a href="tel:085759200639" target="blank"><img src="<?= base_url() ?>assets/images/Wa.png" alt="Logo wa" style="width: 30px; height: 33px; border-radius: 50%" /></a>
                            <a href="https://id-id.facebook.com/" target="blank"><img src="<?= base_url() ?>assets/images/Fb.png" alt="Logo facebook" style="width: 30px; height: 33px; border-radius: 50%" /></a>
                            <a href="https://twitter.com/login" target="blank"><img src="<?= base_url() ?>assets/images/Twit.png" alt="Logo twitter" style="width: 30px; height: 33px; border-radius: 50%" /></a>
                            <a href="https://www.instagram.com/" target="blank"><img src="<?= base_url() ?>assets/images/Ig.png" alt="Logo instagram" style="width: 30px; height: 33px; border-radius: 50%" /></a>
                            <h1><b style="font-size: 40px; font-family: 'Brush Script MT'">Dinas Kesehatan</b> <br /></h1>
                            <p>
                                Dinas Kesehatan Kab. Sleman | Pemerintah Kabupaten Sleman <br /> Daerah Istimewa Yogyakarta | Kementerian Kesehatan Republik Indonesia
                            </p>
                        </td>
                        <td style="text-align: left; width: 8%"></td>
                        <td style="text-align: justify; width: auto">
                            <h2><b>Hubungi Kami</b></h2>
                            Alamat Kantor Dinas Kesehatan Kabupaten Sleman:

                            Jalan Roro Jonggrang No. 6, Beran, Tridadi, Sleman, Yogyakarta 55511
                            Telp : (0274) 868409, Fax : (0274) 868945

                            Website : http://www.dinkes.slemankab.go.id

                            E-mail : dinkes@slemankab.go.id
                        </td>
                    </tr>
                </table>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#273036" fill-opacity="1" d="M0,192L60,181.3C120,171,240,149,360,170.7C480,192,600,256,720,240C840,224,960,128,1080,96C1200,64,1320,96,1380,112L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
        </div>
        </div>
    </section>
    <!-- Akhir Kontak -->
    <!-- Komen -->
    <section style="background-color: #f5deb3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#273036" fill-opacity="1" d="M0,192L48,192C96,192,192,192,288,165.3C384,139,480,85,576,90.7C672,96,768,160,864,154.7C960,149,1056,75,1152,74.7C1248,75,1344,149,1392,186.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
        <table class="container">
            <tr>
                <td style="width: 45%">
                    <div>
                        <p>Jika Anda berkenan tolong beri komentar/masukan/hal yang membangun mengenai WebGIS sederhana ini</p>
                        <div>
                            <form action="">
                                <fieldset>
                                    <legend>Form Komentar</legend>
                                    <label for="name">Nama</label> <br />
                                    <input type="text" name="name" id="name" style="height: 35px; width: 400px" /> <br />
                                    <label for="email" class="col-sm-2 col-form-label">Email</label> <br />
                                    <input type="text" name="email" id="email" style="height: 35px; width: 400px" /> <br />
                                    <label for="sar" class="col-sm-2 col-form-label">Saran/masukan</label> <br />
                                    <textarea id="for" style="width: 400px; height: 100px"></textarea> <br />
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </td>
                <td style="width: 10%"></td>
                <td style="width: 45%">
                    <div>
                        <br />
                        <p>Lokasi Saya</p>
                        <div style="background-color: black; padding: 5px">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.245664626473!2d107.59216121477263!3d-6.86113389504175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6b943c2c5ff%3A0xee36226510a79e76!2sUniversitas%20Pendidikan%20Indonesia!5e0!3m2!1sid!2sid!4v1642755860115!5m2!1sid!2sid" width="500" height="400" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <br />
        <br />
    </section>
    <!-- Akhir komen -->
    <!-- Footer -->
    <footer class="t_putih">
        <div class="container">
            <p style="text-align: center"><b>&copy; 2023 WebGIS Sebaran Faskes dan Tenkes | Pemkab Sleman</b></p>
        </div>
    </footer>
    <!-- Akhir footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>