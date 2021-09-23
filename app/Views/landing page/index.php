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
          <h1 data-aos="fade-up">Laboratorium Multimedia</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Tahun 2021</h2>
          <h3 data-aos="fade-up" data-aos-delay="500">Video tutorial multimedia Interaktif</h3>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#videolist" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>VIDEO TUTORIAL</h2>
        <p>Multimedia Interaktif</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <i class="ri-discuss-line icon"></i>
            <h3>Sinkronous</h3>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
            <a href="/Home/sinkronous" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <i class="ri-discuss-line icon"></i>
            <h3>Asinkronous</h3>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
            <a href="/Home/asinkronous" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box green">
            <i class="ri-discuss-line icon"></i>
            <h3>Sinkronous & Asinkronous</h3>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
            <a href="/Home/gabungan" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-box red"><img src="assets/img/test.png" alt="">
            <h3>Max Time Awal</h3>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
            <a href="/Home/timeawal" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-box purple"><img src="assets/img/test.png" alt="">
            <h3>Max Time Akhir</h3>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
            <a href="/Home/timeakhir" class="read-more"><span>Tonton Video</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <i class="ri-discuss-line icon"></i>
            <h3>Max Time Awal & Akhir</h3>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
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