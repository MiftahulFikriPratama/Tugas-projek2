<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>form nilai get</title>
  </head>
  <body class="bg-dark text-white">
  

<form action="1.form_get.php" method="GET">
  <div class="form-group row">
    <label for="nama" class="col-6 col-form-label">Nama Lengkap</label> 
    <div class="col-6">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-6 col-form-label">Mata Kuliah</label> 
    <div class="col-6">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-6 col-form-label">Nilai UTS</label> 
    <div class="col-6">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-6 col-form-label">Nilai UAS</label> 
    <div class="col-6">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-6 col-form-label">NIlai Tugas</label> 
    <div class="col-6">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="NIlai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-6 col-6">
    <input type="submit" value="SIMPAN" name="proses" class="btn btn-primary"/>
    </div>
  </div>
</form>
<!--Kode PHP-->
<?php
$proses = $_GET["proses"];
$nama_siswa = $_GET["nama"];
$mata_kuliah = $_GET["matkul"];
$nilai_uts = $_GET["nilai_uts"];
$nilai_uas = $_GET["nilai_uas"];
$nilai_tugas = $_GET["nilai_tugas"];


echo 'Proses :' . $proses;
echo '<br/>Nama :' . $nama_siswa;
echo '<br/>Mata Kuliah :' . $mata_kuliah;
echo '<br/>Nilai UTS :' . $nilai_uts;
echo '<br/>Nilai UAS :' . $nilai_uas;
echo '<br/>Nilai Tugas :' . $nilai_tugas;

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