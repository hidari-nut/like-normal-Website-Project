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
    <?php

    ?>

</head>

<body>

    <?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    if(!isset($_SESSION)){
        session_start();
    }

    //The settings fields are all required, so if one of the settings fields are set, all of them should be as well.
    if (!isset($_COOKIE["address_required"])) {
        header("Location: setting.php");
        exit();
    }

    if (isset($_POST["submit"])) {

        if (!isset($_SESSION["students"])) {
            $_SESSION["students"] = array();
        }

        //The ID of each students are their NRP
        $student_nrp = $_POST["nrp"];
        $name = $_POST["name"];
        //If required, $_POST would not return empty.
        if ($_COOKIE["address_required"] == "Yes" || $_POST["address"] != "") {
            $address = $_POST["address"];
        }
        else if($_COOKIE["address_required"] == "Yes" && $_POST["address"] == ""){
            echo "Please reload the page and fill the required fields.";
        }
        else{
            $address="Not Entered";
        }
        $ipk = $_POST["ipk"];
        


        $_SESSION["students"][$student_nrp] = array("Name" => $name, "Address" => $address, "IPK" => $ipk);
    }


    ?>

    <form method="POST" action="input.php">

        <h2>Input Form</h2>

        <label for="name">NRP:</label><br>
        <input type="text" id="nrp" name="nrp" placeholder="Your NRP here" required>
        <br><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Your name here" required>
        <br><br>

        <!-- <?php
        if (isset($_COOKIE["address_required"]) && $_COOKIE["address_required"] == "Yes") {
            echo '<label for="address">Address:</label><br>';
            echo '<input type="text" id="address" name="address" placeholder="Your address here">';
            echo '<br><br>';
        }
        ?> -->

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" placeholder="Your address here" <?php
            if ($_COOKIE["address_required"] == "Yes") {
                echo "required";
            }
        ?>>
        <br><br>

        <label for="ipk">IPK:</label><br>
        <input type="text" id="ipk" name="ipk" placeholder="Your IPK here" value="<?php
        if (isset($_COOKIE["default_ipk"])) {
            echo $_COOKIE["default_ipk"];
        }
        ?>">
        <br><br>

        <input type="submit" name="submit" value="Submit" style="font-size:20px">

        <input type="button" onclick="window.location.href='index.php';" value="Back" style="font-size:20px" />
    </form>
    <script src="" async defer></script>
</body>

</html>