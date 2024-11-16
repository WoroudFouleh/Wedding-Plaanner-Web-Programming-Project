<!DocType html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./style.css">


</head>
<body>

<div class="container">
    <?php @include 'header3.php'; ?>

    <section class="portfolio">

        <h1 class="heading">our portfolio</h1>

        <div class="portfolio-container">

            <a href="images/q1.jpg" class="box">
                <div class="image">
                    <img src="images/q1.jpg" alt="">
                </div>
                <h3>wedding ceremony</h3>
            </a>

            <a href="images/q2.jpg" class="box">
                <div class="image">
                    <img src="images/q2.jpg" alt="">
                </div>
                <h3>wedding ceremony</h3>
            </a>

            <a href="images/q3.jpg" class="box">
                <div class="image">
                    <img src="images/q3.jpg" alt="">
                </div>
                <h3>wedding ceremony</h3>
            </a>

            <a href="images/q4.jpg" class="box">
                <div class="image">
                    <img src="images/q4.jpg" alt="">
                </div>
                <h3>wedding ceremony</h3>
            </a>

            <a href="images/q5.jpg" class="box">
                <div class="image">
                    <img src="images/q5.jpg" alt="">
                </div>
                <h3>wedding ceremony</h3>
            </a>

            <a href="images/q6.jpg" class="box">
                <div class="image">
                    <img src="images/q6.jpg" alt="">
                </div>
                <h3>wedding ceremony</h3>
            </a>

            <a href="images/q7.jpg" class="box">
                <div class="image">
                    <img src="images/q7.jpg" alt="">
                </div>
                <h3>wedding ceremony</h3>
            </a>

            <a href="images/q8.jpg" class="box">
                <div class="image">
                    <img src="images/q8.jpg" alt="">
                </div>
                <h3>wedding ceremony</h3>
            </a>
            <a href="images/q10.jpg" class="box">
                <div class="image">
                    <img src="images/q10.jpg" alt="">
                </div>
                <h3>wedding ceremony</h3>
            </a>
        </div>

    </section>

    <?php @include 'footer3.php'; ?>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

    lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>
