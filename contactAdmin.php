<!DocType html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./style.css">


</head>
<body>

<div class="container">
    <?php @include 'header3.php'; ?>

    <section class="contact">

        <h1 class="heading">contact us</h1>

        <form action="" method="post">

            <div class="flex">

                <div class="inputBox">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>

                <div class="inputBox">
                    <span>your email</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>

                <div class="inputBox">
                    <span>your number</span>
                    <input type="number" placeholder="enter your number" name="number" required>
                </div>

                <div class="inputBox">
                    <span>choose plan</span>
                    <select name="plan">
                        <option value="basic">basic plan</option>
                        <option value="premium">premium plan</option>
                        <option value="ultimate">ultimate plan</option>
                    </select>
                </div>

                <div class="inputBox">
                    <span>your address</span>
                    <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
                </div>

                <div class="inputBox">
                    <span>your message</span>
                    <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
                </div>

            </div>

            <input type="submit" value="send message" name="send" class="btnn">

        </form>

    </section>

    <?php @include 'footer3.php'; ?>


</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<script src="js/script.js"> </script>
</body>
</html>

