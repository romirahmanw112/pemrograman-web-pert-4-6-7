<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>

<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <h1>Hey !</h1>
            <p>SI'm Yoga, I am a Student at Pelita Bangsa University <br> I’m currently learning <b>Cybersecurity and Data Science.</b></p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>

</html>