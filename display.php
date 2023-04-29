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
    session_start();

    if (isset($_SESSION["students"])) {
        $students = $_SESSION["students"];
        $font_size = $_COOKIE["display_font_size"];
        $font_type = $_COOKIE["display_font_type"];
        $address_displayed = $_COOKIE["address_displayed"];
        $ipk_displayed = $_COOKIE["ipk_displayed"];

        foreach ($students as $nrp => $data) {

            $name = $data["Name"];
            $address = $data["Address"];
            $ipk = $data["IPK"];

            echo "<div style='font-size:{$font_size}pt'>";
            echo "<div style='font-style:{$font_type}'>";            
            echo "<div style='font-weight:{$font_type}'>";
            echo "<div style='text-decoration:{$font_type}'>";


            echo "NRP: $nrp";
            echo "<br>";

            echo "Nama: $name";
            echo "<br>";

            if ($address_displayed == "Yes") {
                echo "Alamat: $address";
                echo "<br>";
            }
            
            if ($ipk_displayed == "Yes") {
                echo "IPK: $ipk";
                echo "<br>";
            }
            echo "<br>";    
        }
    } else {
        echo "SESSION NOT SET!";
    }
    ?>

    <form>
        <input type="button" onclick="window.location.href='index.php';" value="Back" style="font-size:20px" />
    </form>

    <script src="" async defer></script>
</body>

</html>