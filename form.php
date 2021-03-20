<!DOCTYPE html>
<html lang="en">
<head>
    <title>Himanshu Kashyap</title>

    <meta charset="UTF-8">
    <meta name="keywords" content="himan_kash, himanshu, kashyap, himanshu kashyap, iamhiman, lpu, dehradun, software developer, web developer">
    <meta name="description" content="Hey, I'm Himanshu Kashyap a Software Developer from Dehradun, Uttarakhand. Here's my portfolio where you can see all my projects, blogs, and achievements.">
    <meta name="author" content="Himanshu Kashyap">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" type="image/png" sizes="192x192" href="images/android-chrome-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">

</head>

<body>

    <div class="form-container">
        <form action="form.php" name="myForm" onsubmit="return validateForm()" method="post" autocomplete="off">

            <div class="forminput" id="name">
                <input type="text" class="name" name="fname" placeholder="Name" required>
                <div class="formerror"></div>
            </div>

            <div class="forminput" id="email">
                <input type="email" class="email" name="femail" placeholder="Email" required>
                <div class="formerror"></div>
            </div>

            <div class="forminput" id="message">
                <textarea class="message" name="fmessage" placeholder="Message...(Max 200 Characters)" cols="20" rows="10" required></textarea>
                <div class="formerror"></div>
            </div>

            <div class="formbtn">
                <input class="form-button" name="submit" type="submit" id="submit" value="Submit">
            </div>

        </form>

    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>


<?php include "db.php"; ?>
<?php createRow(); ?>