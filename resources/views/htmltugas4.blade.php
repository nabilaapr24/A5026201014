<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        #poster {
            float: left;
            display: block;
            margin: 30px auto;
            border-radius: 10px;
        }
    </style>

    <script>
        $(document).ready(function () {
            $("#sinopsis").click(function () {
                $("#summary").toggle();
            });
        });
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="https://i.postimg.cc/ZnnTZKM4/image.png" alt="logo" style="width:100px;">
        </a>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit"
                    style="background-color: rgb(184, 184, 235)">Search</button>
            </form>
        </nav>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Popular</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Genre
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Comedy</a>
                    <a class="dropdown-item" href="#">Horror</a>
                    <a class="dropdown-item" href="#">Romance</a>
                    <a class="dropdown-item" href="#">Others</a>
                </div>
            </li>
        </ul>
    </nav>
    <br>

    <div class="container">

        <div class="alert alert-success alert-dismissible fade show" id="myAlert">
            <button type="button" class="btn-close" data-dismiss="alert">&times;</button>
            <h4><strong>Success!</strong> File is being downloaded...</h4>
            <i class="bi bi-check2-square"></i>
            <p>If the download didn't start, click <a href="https://www.netflix.com" class="alert-link">here</a> to
                download manually.</p>

        </div>

        <h2><b>DOWNLOAD FILM CINDERELLA (2015)</b></h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <img class="poster" src="https://i.postimg.cc/9XGZJszx/image.png" alt="poster" width=200px
                        height=300px>
                    <br><br>
                    <button type="button" class="btn btn-primary" style="align: center" onclick="myFunction()"> DOWNLOAD
                    </button>
                </div>
                <div class="col-sm-9">
                    <p>
                        <b>Judul :</b> Cinderella (2015) <br>
                        <b>Tahun rilis :</b> 2015<br>
                        <b>Tanggal rilis :</b>
                        <li>13 Februari 2015 (Berlin)</li>
                        <li>13 Maret 2015 (Amerika Serikat)</li>
                        <li>03 April 2015 (Afrika Selatan) </li>
                        <li>11 Maret 2015 (Indonesia)</li>
                        <b>Durasi :</b> 112 menit <br>
                        <b>Negara :</b> Britania Raya <br>
                        <b>Bahasa :</b> Inggris <br>
                    </p>
                    <button id="sinopsis" class="btn btn-primary">Klik untuk melihat sinopsis</button>
                    <div id="summary" class="collapse">
                    <p><b>Sinopsis :</b><br>
                        Cerita berdasarkan pada film animasi Disney tahun 1950, dengan beberapa penyesuaian. Dalam versi
                        ini, Cinderella dan Pangeran Tampan telah bertemu sebelum pesta dansa istana. Pada saat itu,
                        Pangeran mengungkapkan bahwa ia hanyalah seorang pegawai istana biasa. Ibu peri memiliki peran
                        yang lebih besar dalam film ini daripada film sebelumnya, karena ia awalnya menyamar sebagai
                        pengemis tua yang mengawasi Cinderella sebelum akhirnya mengungkapkan bahwa dirinya adalah
                        makhluk ajaib. <br>
                        Cerita film berkisah tentang Ella, yang dijadikan pesuruh oleh ibu tirinya sendiri. Setelah
                        ayahnya meninggal dunia, kelakuan ibu dan saudara tirinya makin menjadi-jadi. Ella yang
                        dijadikan pembantu, juga diganti namanya menjadi Cinderella. Dan kemudian Ella bertemu orang
                        asing yang gagah di hutan. Dia tak menyadari bahwa orang tersebut adalah seorang pangeran.
                        Ketika istana mengirimkan undangan terbuka untuk semua gadis, Cinderella pun berharap bisa
                        bertemu dengan pangerannya lagi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var myAlert = document.getElementById('myAlert');

        myAlert.style.display = 'none'

        function myFunction() {
            myAlert.style.display = 'block'
        }
    </script>


</body>

</html>