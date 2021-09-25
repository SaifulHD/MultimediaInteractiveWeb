<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->include('templates/head'); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Actor|Source+Sans+Pro:900|Lato:400,700,900|Oswald:400,700|Abel:400|Dosis:600" rel="stylesheet">
</head>

<body>
    <?= $this->include('templates/navbar'); ?>
    <section class="hero ">
        <div class="cardvideo">
            <div class="thumbnailvideo">
                <img class="leftphoto" src="https://cdn2.hubspot.net/hubfs/322787/Mychefcom/images/BLOG/Header-Blog/photo-culinaire-pexels.jpg" />
            </div>
            <div class="rightcard">
                <h1 class="h1card">Sinkronous</h1>
                <i class="fa fa-clock-o fa-2x" style="margin-right: 5px; padding-top: -5px;"></i><span class="lead">14 Min</span>
                <div class="separatorcard"></div>
                <p class="pcard">Multimedia interaktif sinkronous adalah multimedia yang akan menjalankan unsur multimedia seperti video, audio text, image secara otomatis, atau tidak dengan menggunakan input dari user atau pengguna.
                    Pada modul ini praktikan diharapkan mampu membuat aplikasi multimedia interaktif sinkronous dengan menggunakan komponen gambar, video, audio dan teks sesuai dengan timeline tree.
                </p>
            </div>
            <div class="text-center">
                <!-- copy and paste. Modify height and width if desired. -->
                <iframe class="embeddedObject shadow resizable" name="embedded_content" scrolling="no" frameborder="0" type="text/html" style="overflow:hidden;height: 428px;width: 80%; " src="https://www.screencast.com/users/hayuslurd/folders/Camtasia%20Studio/media/f3a88f87-d02a-4263-844f-36d073925478/embed" height="1080" width="1920" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="fab"><a href="#footer"><i class="fa fa-arrow-right fa-3x"> </i></a></div>
            <div class="fab2"><a href="#footer"><i class="fa fa-arrow-left fa-3x"> </i></a></div>
        </div>
    </section><!-- End Hero -->

    <?= $this->include('templates/footer'); ?>
    <?= $this->include('templates/script'); ?>

</body>


</html>