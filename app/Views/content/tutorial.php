<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>How To Install</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->include('templates/head'); ?>
</head>

<body>
    <?= $this->include('templates/navbar'); ?>
    <section id="videolist" class="services">

        <div class="container" id="listvideo" data-aos="fade-up">
            <header class="section-header">
                <h2>HOW TO INSTALL</h2>
                <p>ADOBE ANIMATE</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <img src="assets/img/SYNC.png" alt="">
                        <h3>Download Adobe Animate</h3>
                        <p>Download adobe animate dari link berikut ini :</p>
                        <a href="https://drive.google.com/file/d/1wl2FoMUtTY0TCPpRXbPTJw-TYdM5wUdk/view?usp=sharing" class="read-more"><span>DOWNLOAD</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <img src="assets/img/ASYNC.png" alt="">
                        <h3>Asinkronous</h3>
                        <p>Multimedia interaktif asinkronous adalah multimeda yang memerlukan masukkan (input) dari pengguna untuk mengeksekusi atau menjalankan media (video, audio, gambar atau teks). Input dari user biasanya berupa button.</p>
                        <a href="/Home/asinkronous" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <img src="assets/img/SYNCASYNC.png" alt="">
                        <h3>Sinkronous & Asinkronous</h3>
                        <p>Multimedia interaktif sinkronous asinkronous adalah gabungan antara multimedia interaktif sinkronous dan asinkronous. Dengan skenario sinkronous di awal lalu diakhiri dengan asinkronous atau sebaliknya</p>
                        <a href="/Home/gabungan" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple"><img src="assets/img/MAX AKHIR.png" alt="">
                        <h3>Max Time Akhir</h3>
                        <p>Multimedia interaktif max time akhir adalah multimedia yang menggunakan timer sebagai batas waktu, untuk menghentikan sebuah media yang sedang berjalan</p>
                        <a href="/Home/timeakhir" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red"><img src="assets/img/MAX AWAL.png" alt="">
                        <h3>Max Time Awal</h3>
                        <p>Multimedia interaktif max time awal adalah multimedia yang menggunakan timer sebagai batas waktu, untuk menjalankan sebuah media.</p>
                        <a href="/Home/timeawal" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <img src="assets/img/MAX AWAL AKHIR.png" alt="">
                        <h3>Max Time Awal & Akhir</h3>
                        <p>Multimedia max time awal dan max time akhir adalah gabungan yang menggunakan timer sebagai batas waktu untuk menjalankan media dan batas waktu untuk mengakhiri media</p>
                        <a href="/Home/awalakhir" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <?= $this->include('templates/footer'); ?>

    <?= $this->include('templates/script'); ?>
</body>

</html>