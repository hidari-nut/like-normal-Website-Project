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
        foreach ($students as $nrp => $data) {

            $name = $data["Name"];
            $address = $data["Address"];
            $ipk = $data["IPK"];

            echo "NRP: $nrp";
            echo "<br>";

            echo "Nama: $name";
            echo "<br>";

            echo "Alamat: $address";
            echo "<br>";

            echo "IPK: $ipk";
            echo "<br><br>";
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