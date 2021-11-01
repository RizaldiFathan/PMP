<!-- Nama   : Rizaldi Fathan Qorin -->
<!-- NPM    : 5190411591 -->
<!-- Matkul : Pemrograman Mobile Praktikum Kelas III-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- FONT & ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="https://github.com/RizaldiFathan/img-all/blob/main/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="icon" href="https://github.com/RizaldiFathan/img-all/blob/e5874f4455895b1fc69f71f6b9bb1e49b3415461/logo1.png" type="image/x-icon"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Program Konversi nilai by rizaldi</title>
    <!-- CSS INTERNAL -->
    <style>
        body{
            background-color: #1F1F1F;
        }
        .kotak{
            margin: auto;
            right: 0;
            left: 0;
            margin-top: 150px;
            margin-bottom: 50px;
            background-color: #ffffff;
            text-align: center;
            box-shadow: 0 0 0.5rem #ffffff !important;
        }
        .kotak h1{
            font-family: 'Roboto';
            font-size: 36px;
            color: #FFC500;
            font-weight: 600 !important;
            text-align: left;
        }
        .kotak label{
            color: #C4C4C4;
        }
        .kotak button{
            font-family: 'Roboto';
            position: absolute;
            left:0;
        }
        .convert{
            margin-top:80px !important;
        }
        .convert p{
            position: relative;
            font-family: 'Roboto';
            color: #606060;
            color: red;
        }
        .convert h5{
            position: relative;
            font-family: 'Roboto';
            color: #606060;
        }
        .convert span{
            position: relative;
            font-family: 'Roboto';
            font-size: 56px;
            color: #606060;
            font-weight: 600;
        }
        footer{
            font-family: 'Roboto';
            color: #ffffff;
            text-align: center;
        }
        footer a{
            text-decoration: none;
            color: #FFC500;
        }
        footer a:hover{
            color: #FFC500;
        }
    </style>

  </head>
  <body>
    <div class="container-fluid">
        <div class="container kotak col-md-6 rounded shadow-sm p-5">
            <div class="mb-4">
                <h1>Selamat Datang dalam Program Konversi Nilai <i class="fas fa-exchange-alt"></i></h1>
                <form action="" method='POST' enctype='multipart/form-data'>
                    <div class="form-floating mt-4">
                        <input type="number" class="form-control" id="floatingInput" name="nilai" placeholder="0" autofocus>
                        <label for="floatingInput">silahkan masukan nilai anda (0 - 100)</label>
                        <button class="btn btn-warning mt-4" name="convert">Convert</button>
                    </div>
                </form>
            </div>
            <div class="convert mt-5">
                <?php
                    if (isset($_POST['convert'])) {
                        $nilai = $_POST['nilai'];
                        if (empty($nilai)) {
                            echo "<p>Kamu Belum Menginputkan Nilai<br>atau</p>";
                        }
                        if ($nilai>=81 && $nilai<=100) {
                            echo '<h5 class="mt-4">Nilai Kamu <strong>'.$nilai.'</strong> dikonversi manjadi</h5>';
                            echo "<span>A</span>";
                        }
                        elseif($nilai>=61 && $nilai<=80){
                            echo '<h5 class="mt-4">Nilai Kamu <strong>'.$nilai.'</strong> dikonversi manjadi</h5>';
                            echo "<span>B</span>";
                        }
                        elseif($nilai>=51 && $nilai<=60){
                            echo '<h5 class="mt-4">Nilai Kamu <strong>'.$nilai.'</strong> dikonversi manjadi</h5>';
                            echo "<span>C</span>";
                        }
                        elseif($nilai>=41 && $nilai<=50){
                            echo '<h5 class="mt-4">Nilai Kamu <strong>'.$nilai.'</strong> dikonversi manjadi</h5>';
                            echo "<span>D</span>";
                        }
                        elseif($nilai>=0 && $nilai<=40){
                            echo '<h5 class="mt-4">Nilai Kamu <strong>'.$nilai.'</strong> dikonversi manjadi</h5>';
                            echo "<span>E</span>";
                        }
                        else{
                            echo '<p class="mt-4 error">Nilai Kamu <strong>'.$nilai.'</strong> diluar rantang konversi, <br>masukkan kembali sesuai rentang nilai konversi <i class="far fa-smile-wink"></i></p>';
                        }
                        
                    }
                ?>
            </div>
        </div>
        <footer class="mb-4 mt-5"><span>&copy copyright 2021 created by peaceful <a href="https://www.instagram.com/rzl.than/">rzl.than</a></span></footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh51eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>