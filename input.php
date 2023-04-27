<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>

    <?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    session_start();

    if (isset($_POST["submit"])) {
        $_SESSION["nrp"] = $_POST["nrp"];
        $_SESSION["name"] = $_POST["name"];
        if (isset($_COOKIE["address_required"]) && $_COOKIE["address_required"] == "Yes") {
            $_SESSION["address"] = $_POST["address"];
        }
        $_SESSION["ipk"] = $_POST["ipk"];
    }


    ?>
    <form method="POST" action="input.php">

        <h2>Input Form</h2>

        <label for="name">NRP:</label><br>
        <input type="text" id="nrp" name="nrp" placeholder="Your NRP here">
        <br><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Your name here">
        <br><br>

        <?php
        if (isset($_COOKIE["address_required"]) && $_COOKIE["address_required"] == "Yes") {
            echo '<label for="address">Address:</label><br>';
            echo '<input type="text" id="address" name="address" placeholder="Your address here">';
            echo '<br><br>';
        }
        ?>

        <label for="ipk">IPK:</label><br>
        <input type="text" id="ipk" name="ipk" placeholder="Your IPK here" value="<?php
        if (isset($_COOKIE["default_ipk"])) {
            echo $_COOKIE["default_ipk"];
        }
        ?>">
        <br><br>

        <input type="submit" name="submit" value="Submit">

    </form>
    <script src="" async defer></script>
</body>

</html>