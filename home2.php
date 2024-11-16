<!DocType html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link href="css/bootstrap.min.css" rel ="stylesheet"/>
    <link rel="stylesheet" href="./style.css">
    <script>
        // When the user clicks on div, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    </script>
    <style>
        /* Popup container - can be anything you want */
        .popup {
            position: relative;
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
 .fontt{
     font-size: 15px;
     color:white;
     font-family: Cambria;
     font-weight: bold;
 }
        /* The actual popup */
        .popup .popuptext {
            visibility: hidden;
            width: 160px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 8px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -80px;
        }

        /* Popup arrow */
        .popup .popuptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        /* Toggle this class - hide and show the popup */
        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity:1 ;}
        }
    </style>

</head>
<body>

<div class="container">
    <?php @include 'header2.php'; ?>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <video autoplay loop muted playsinline class="back-video">
                        <source src="images/QQ.mp4" type="video/mp4">
                    </video>
                    <div class="content">
                        <h3> plan your wedding!</h3>
                        <p> involves careful organization, from selecting the perfect venue and creating a beautiful decor to choosing a delicious menu and coordinating with vendors to make your special day memorable."</p>
                        <a href="index.php" class="btnn" required>Let's Connected</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="services">
        <h1 class="heading">our services</h1>
        <div class=" swiper service-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" >
                    <img src="images/VP.jpg" alt="">
                    <div class="content">
                        <h3>
                            venue planning
                        </h3>
                        <p>involves selecting and organizing the perfect location for a couple's dream wedding celebration.</p>

                        <div class="popup" onclick="myFunction()">
                            <span class="popuptext" id="myPopup" ><a href="index.php" class="fontt">Click to register!</a> </span>
                        <a class="btnn" >more tips</a>
                    </div>
                    </div>
                </div>

                <div class="swiper-slide" >
                    <img src="images/ser3.jpg" alt="">
                    <div class="content">
                        <h3>
                            invitation card
                        </h3>
                        <p>conveys the couple's love and joy, inviting guests to share in their special day and marking the beginning of a beautiful journey together.
                        </p>
                        <div class="popup" onclick="myFunction()">
                            <span class="popuptext" id="myPopup" ><a href="index.php" class="fontt">Click to register!</a> </span>
                            <a class="btnn" >more tips</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" >
                    <img src="images/dec.jpg" alt="">
                    <div class="content">
                        <h3>
                            decoration
                        </h3>
                        <p>create an enchanting atmosphere, transforming the venue into a magical space that reflects the couple's unique style and celebrates their love.
                        </p>
                        <div class="popup" onclick="myFunction()">
                            <span class="popuptext" id="myPopup" ><a href="index.php" class="fontt">Click to register!</a> </span>
                            <a class="btnn" >more tips</a>
                        </div>
                    </div>
                </div>



















<!--                <div class="swiper-slide" >-->
<!--                    <img src="images/dec.jpg" alt="">-->
<!--                    <div class="content">-->
<!--                        <h3>-->
<!--                            decoration-->
<!--                        </h3>-->
<!--                        <p>create an enchanting atmosphere, transforming the venue into a magical space that reflects the couple's unique style and celebrates their love.</p>-->
<!--                        <div class="popup" onclick="myFunction()">-->
<!--                            <span class="popuptext" id="myPopup" ><a href="index.php" class="fontt">Click to register!</a> </span>-->
<!--                            <a class="btnn" >about us</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                -->
<!--                -->



                <div class="swiper-slide" >
                    <img src="images/WC.jpg" alt="">
                    <div class="content">
                        <h3>
                            wedding cake
                        </h3>
                        <p>is a delicious centerpiece that symbolizes joy and unity, delighting guests with its beautiful design and delectable flavors.
                        </p>
                        <div class="popup" onclick="myFunction()">
                            <span class="popuptext" id="myPopup" ><a href="index.php" class="fontt">Click to register!</a> </span>
                            <a class="btnn" >more tips</a>
                        </div>
                    </div>
                </div>













<!--                -->
<!--                <div class="swiper-slide" >-->
<!--                    <img src="images/WC.jpg" alt="">-->
<!--                    <div class="content">-->
<!--                        <h3>-->
<!--                            wedding cake-->
<!--                        </h3>-->
<!--                        <p> is a delicious centerpiece that symbolizes joy and unity, delighting guests with its beautiful design and delectable flavors.</p>-->
<!--                        <a href="about.php" class="btnn" >about us</a>-->
<!---->
<!--                    </div>-->
<!--                </div>-->



                <div class="swiper-slide" >
                    <img src="images/ser3.jpg" alt="">
                    <div class="content">
                        <h3>
                            photography
                        </h3>
                        <p>captures cherished moments, preserving the love, emotions, and memories of the special day for a lifetime of nostalgic reflection.
                        </p>
                        <div class="popup" onclick="myFunction()">
                            <span class="popuptext" id="myPopup" ><a href="index.php" class="fontt">Click to register!</a> </span>
                            <a class="btnn" >about us</a>
                        </div>
                    </div>
                </div>


<!---->
<!---->
<!--                <div class="swiper-slide" >-->
<!--                    <img src="images/ph.jpg" alt="">-->
<!--                    <div class="content">-->
<!--                        <h3>-->
<!--                            photography-->
<!--                        </h3>-->
<!--                        <p>captures cherished moments, preserving the love, emotions, and memories of the special day for a lifetime of nostalgic reflection.</p>-->
<!--                        <a href="about.php" class="btnn" >about us</a>-->
<!---->
<!--                    </div>-->
<!--                </div>-->

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>


    <?php @include 'footer2.php'; ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<script src="js/script.js"> </script>
</body>
</html>
