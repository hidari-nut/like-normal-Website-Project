<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->

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
    session_start();

    if (isset($_COOKIE["address-required"])) {
        $address_required = $_COOKIE["address-required"];
    } else {
        $address_required = "No";
    }
    ?>
    <form method="POST" action="input.php">
        <h2>Setting for Input page</h2>

        <label>Address is required?</label><br>
        <input type="radio" id="yes-address" name="address-required" value="Yes">
        <label for="yes-address">Yes</label><br>
        <input type="radio" id="no-address" name="address-required" value="No">
        <label for="no-address">No</label><br>
        <br>

        <label for="default-ipk">Default Value for IPK:</label><br>
        <input type="text" id="default-ipk" name="default-ipk" placeholder="Default IPK">
        <br><br>

        <h2>Setting for Display page</h2>

        <label for="display-font-size">Display font size:</label><br>
        <input type="text" id="display-font-size" name="display-font-size" placeholder="Font size">
        <label>px</label>
        <br><br>

        <label for="display-font-type">Display font type:</label><br>
        <select id="display-font-type" name="display-font-type">
            <option value="bold">Bold</option>
            <option value="italic">Italic</option>
            <option value="underline">Underline</option>
        </select>
        <br><br>

        <label>Address is displayed?</label><br>
        <input type="radio" id="yes-address-displayed" name="address-displayed" value="Yes">
        <label for="yes-address-displayed">Yes</label><br>
        <input type="radio" id="no-address-displayed" name="address-displayed" value="No">
        <label for="no-address-displayed">No</label><br>
        <br>

        <label>IPK is displayed?</label><br>
        <input type="radio" id="yes-ipk-displayed" name="ipk-displayed" value="Yes">
        <label for="yes-ipk-displayed">Yes</label><br>
        <input type="radio" id="no-ipk-displayed" name="ipk-displayed" value="No">
        <label for="no-ipk-displayed">No</label><br>
        <br>
        <input type="submit" value="submit">
    </form>

    <?php
    if (isset($_POST["address-required"])) {
        $address_required = $_POST["address-required"];
        setcookie("address-required", $address_required,time() + 2628288);
    } else {
    }
    ?>

    <script src="" async defer></script>
</body>

</html>