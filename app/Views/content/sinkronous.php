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
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
</head>

<body>
    <?= $this->include('templates/navbar'); ?>
    <div class="container">
        <div class="cardvideo">
            <div class="thumbnailvideo">
                <img class="leftphoto" src="https://cdn2.hubspot.net/hubfs/322787/Mychefcom/images/BLOG/Header-Blog/photo-culinaire-pexels.jpg" />
            </div>
            <div class="rightcard">
                <h1 class="h1card">Sinkronous</h1>
                <i class="fa fa-clock-o fa-2x"></i><span> 14 Min</span>
                <br>
                <div class="separatorcard"></div>
                <p class="pcard">Magnesium is one of the six essential macro-minerals that is required by the body for energy production and synthesis of protein and enzymes. It contributes to the development of bones and most importantly it is responsible for synthesis of your DNA and RNA. A new report that has appeared in theBritish Journal of Cancer, gives you another reason to add more magnesium to your diet...</p>
            </div>
            <h5 class="h5card"><?= date('d'); ?></h5>
            <h6 class="h6card"><?= date('F'); ?></h6>
            <div>

            </div>
            <div class="fab"><a href="#footer"><i class="fa fa-arrow-right fa-3x"> </i></a></div>
            <div class="fab2"><a href="#footer"><i class="fa fa-arrow-left fa-3x"> </i></a></div>
        </div>
    </div>

    <?= $this->include('templates/footer'); ?>
    <?= $this->include('templates/script'); ?>

</body>

</html>