<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laboratorium Multimedia Informatika Itenas</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <?= $this->include('templates/head'); ?>

</head>

<body>
  <?= $this->include('templates/navbar'); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 class="heroh1" data-aos="fade-up">Laboratorium Multimedia</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Tahun 2021</h2>
          <h3 data-aos="fade-up" data-aos-delay="500">Video tutorial multimedia Interaktif</h3>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#listvideo" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Video Tutorial</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url('assets/img/Media player-pana.png') ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Services Section ======= -->
  <section id="videolist" class="services">

    <div class="container" id="listvideo" data-aos="fade-up">
      <header class="section-header">
        <h2>VIDEO TUTORIAL</h2>
        <p>Multimedia Interaktif</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <img src="assets/img/SYNC.png" alt="">
            <h3>Sinkronous</h3>
            <p>Multimedia interaktif sinkronous adalah multimedia yang akan menjalankan unsur multimedia seperti video, audio text, image secara otomatis, atau tidak dengan menggunakan input dari user atau pengguna.</p>
            <a href="/Home/sinkronous" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
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