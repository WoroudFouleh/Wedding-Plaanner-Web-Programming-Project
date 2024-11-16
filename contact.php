
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
<body onload="check()">

<div class="container">
    <?php @include 'header.php';?>

    <section class="contact">

        <h1 class="heading">contact us</h1>

        <form action="connection2.php" method="post">

            <div class="flex">

                <div class="inputBox">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name" name="name1" required>
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
                    <span>Number of attendees</span>
                    <input type="number" placeholder="Select the number" name="attendees" min="100" max="500" required>
                </div>
                <div class="inputBox">
                    <span>Date and time</span>
                    <input type="datetime-local" id="Test_DatetimeLocal" name="dateTime" required>
                </div>

                <div class="inputBox">
                    <span>choose plan</span>
                    <select name="plan" class="plan" id="planid">
                        <option value="basic" onclick="check()">basic</option>
                        <option value="premium" onclick="check()">premium</option>
                        <option value="ultimate" onclick="check()">ultimate</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>choose package</span>
                    <select name="package">
                        <option value="package one">package one</option>
                        <option value="package two">package two</option>
                        <option value="package three">package three</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>city of your wedding</span>
                    <select name="city">
                        <option value="Nablus">Nablus</option>
                        <option value="Jenin">Jenin</option>
                        <option value="Ramallah">Ramallah</option>
                        <option value="Tulakarm">Tulakarm</option>
                        <option value="Qalqilya">Qalqilya</option>

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
            <input type="text" placeholder="price$" name="name" id="textp">

            <input type="submit" value="send message" name="send" class="btnn" >



        </form>

    </section>

    <?php @include 'footer.php'; ?>


</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    function check ()
    {
        var e = document.getElementById("planid");
        var str = e.options[e.selectedIndex].text;
        if(str==="basic"){
            document.getElementById("textp").innerText="250$";
        }
        if(str==="premium"){
            alert("650");
        }
        if(str==="ultimate"){
            alert("1250");
        }
    }
</script>

<script src="js/script.js"> </script>
</body>
</html>

