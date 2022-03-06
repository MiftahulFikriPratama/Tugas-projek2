<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>percabangan switch</title>
  </head>
  <body class="bg-dark text-white">
    <h2>Penghitung otomatis dengan switch</h2>
    <form action="percabangan_switch.php" method="post" >
      Nilai : <input type="number" name="nilai" id="nilai">
      <input type="submit" value="Sabmit" class="btn btn-primary">
    </form>
    <?php

    $nilai = $_POST["nilai"];

    // switch

    switch ($nilai) {
        case $nilai >= 85 && $nilai <= 100:
            echo "Sangat Memuaskan";
            break;
        case $nilai >= 74 && $nilai <= 84:
            echo "Memuaskan";
            break;
        case $nilai >= 56 && $nilai <= 73:
            echo "Cukup";
            break;
        case $nilai >= 36 && $nilai <= 55:
            echo "Kurang";
            break;
        case $nilai >= 0 && $nilai <= 35:
            echo "Sangat Kurang";
            break;
        default; 
            echo "Tidak Ada";
            break;
    }

    

    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>