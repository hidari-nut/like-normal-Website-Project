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

    if (isset($_POST["save"])) {
        $address_required = $_POST["address_required"];
        $default_ipk = $_POST["default_ipk"];
        $display_font_size = $_POST["display_font_size"];
        $display_font_type = $_POST["display_font_type"];
        $address_displayed = $_POST["address_displayed"];
        $ipk_displayed = $_POST["ipk_displayed"];




        setcookie("address_required", $address_required, time() + 60 * 60 * 24 * 30);
        setcookie("default_ipk", $default_ipk, time() + 60 * 60 * 24 * 30);
        setcookie("display_font_size", $display_font_size, time() + 60 * 60 * 24 * 30);
        setcookie("display_font_type", $display_font_type, time() + 60 * 60 * 24 * 30);
        setcookie("address_displayed", $address_displayed, time() + 60 * 60 * 24 * 30);
        setcookie("ipk_displayed", $ipk_displayed, time() + 60 * 60 * 24 * 30);
    }

    ?>

    <form method="POST" action="setting.php">

        <h2>Setting for Input page</h2>

        <label>Address is required?</label><br>

        <input type="radio" id="yes_address" name="address_required" value="Yes" <?php
        if (isset($_COOKIE["address_required"])) {
            $address_required = $_COOKIE["address_required"];
            if ($address_required == "Yes") {
                echo 'checked="checked"';
            }
        }
        ?> required>
        <label for="yes_address">Yes</label><br>

        <input type="radio" id="no_address" name="address_required" value="No" <?php
        if (isset($_COOKIE["address_required"])) {
            $address_required = $_COOKIE["address_required"];
            if ($address_required == "No") {
                echo 'checked="checked"';
            }
        }
        ?> required>
        <label for="no_address">No</label><br>
        <br>

        <label for="default_ipk">Default Value for IPK:</label><br>
        <input type="text" id="default_ipk" name="default_ipk" placeholder="Default IPK" value="<?php
        if (isset($_COOKIE["default_ipk"])) {
            echo $_COOKIE["default_ipk"];
        }
        ?>" required>
        <br><br>

        <h2>Setting for Display page</h2>

        <label for="display_font_size">Display font size:</label><br>
        <input type="text" id="display_font_size" name="display_font_size" placeholder="Font size" value="<?php
        if (isset($_COOKIE["display_font_size"])) {
            echo $_COOKIE["display_font_size"];
        }
        ?>" required>
        <label>px</label>
        <br><br>

        <label for="display_font_type">Display font type:</label><br>
        <select id="display_font_type" name="display_font_type" required>
            <option value="bold" <?php
            if (isset($_COOKIE["display_font_type"])) {
                if ($_COOKIE["display_font_type"] == "bold") {
                    echo "selected";
                }
            }

            ?>>Bold</option>
            <option value="italic" <?php
            if (isset($_COOKIE["display_font_type"])) {
                if ($_COOKIE["display_font_type"] == "italic") {
                    echo "selected";
                }
            }

            ?>>Italic</option>
            <option value="underline" <?php
            if (isset($_COOKIE["display_font_type"])) {
                if ($_COOKIE["display_font_type"] == "underline") {
                    echo "selected";
                }
            }

            ?>>Underline</option>
        </select>
        <br><br>

        <label>Address is displayed?</label><br>
        <input type="radio" id="yes_address_displayed" name="address_displayed" value="Yes" <?php
        if (isset($_COOKIE["address_displayed"])) {
            $address_displayed = $_COOKIE["address_displayed"];
            if ($address_displayed == "Yes") {
                echo 'checked="checked"';
            }
        }
        ?> required>
        <label for="yes_address_displayed">Yes</label><br>
        <input type="radio" id="no_address_displayed" name="address_displayed" value="No" <?php
        if (isset($_COOKIE["address_displayed"])) {
            $address_displayed = $_COOKIE["address_displayed"];
            if ($address_displayed == "No") {
                echo 'checked="checked"';
            }
        }
        ?> required>
        <label for="no_address_displayed">No</label><br>
        <br>

        <label>IPK is displayed?</label><br>
        <input type="radio" id="yes_ipk_displayed" name="ipk_displayed" value="Yes" <?php
        if (isset($_COOKIE["ipk_displayed"])) {
            $ipk_displayed = $_COOKIE["ipk_displayed"];
            if ($ipk_displayed == "Yes") {
                echo 'checked="checked"';
            }
        }
        ?> required>
        <label for="yes_ipk_displayed">Yes</label><br>
        <input type="radio" id="no_ipk_displayed" name="ipk_displayed" value="No" <?php
        if (isset($_COOKIE["ipk_displayed"])) {
            $ipk_displayed = $_COOKIE["ipk_displayed"];
            if ($ipk_displayed == "No") {
                echo 'checked="checked"';
            }
        }
        ?> required>
        <label for="no_ipk_displayed">No</label><br>
        <br>
        <input type="submit" name="save" value="Save" style="font-size:20px">

        <input type="button" onclick="window.location.href='index.php';" value="Back" style="font-size:20px" />
    </form>

    <script src="" async defer></script>
</body>


</html>