<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>P5 | Maxtime Awal & Maxtime Akhir</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->include('templates/head'); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Actor|Source+Sans+Pro:900|Lato:400,700,900|Oswald:400,700|Abel:400|Dosis:600" rel="stylesheet">
</head>

<body>
    <?= $this->include('templates/navbar'); ?>
    <section class="hero ">
        <div class="cardvideo" data-aos="fade-up">
            <div class="thumbnailvideo">
                <img class="leftphoto" src="<?= base_url('assets/img/maxtime awalakhir.gif'); ?>" />
            </div>
            <div class="rightcard">
                <h1 class="h1card"><strong>Pertemuan 5</strong><br> Maxtime Awal & Maxtime Akhir</h1>
                <i class="fa fa-clock-o fa-2x" style="margin-right: 5px; padding-top: -5px;"></i><span class="lead">15 Min</span>
                <div class="separatorcard"></div>
                <p class="pcard">Pada modul ini praktikan diharapkan mampu membuat aplikasi multimedia interaktif sesuai dengan timeline tree dan dengan menggunakan gabungan maxtime awal dan max time akhir. Untuk menentukan waktu sebagai maxtime, praktikan bisa menuliskan kode pada script yang sudah disediakan pada modul.</p>
            </div>
            <div class="text-center">
                <!-- copy and paste. Modify height and width if desired. -->
                <iframe class="embeddedObject shadow resizable" name="embedded_content" scrolling="no" frameborder="0" type="text/html" style="overflow:hidden;height: 428px;width: 80%;" src="https://www.screencast.com/users/hayuslurd/folders/Camtasia%20Studio/media/35006488-ecd6-4acf-ba34-6ce2679651a2/embed" height="1080" width="1920" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

            </div>
            <div class="fab2"><a href="/Home/timeawal"><i class="fa fa-arrow-left fa-3x"> </i></a></div>
        </div>
    </section><!-- End Hero -->

    <?= $this->include('templates/footer'); ?>
    <?= $this->include('templates/script'); ?>

</body>


</html>