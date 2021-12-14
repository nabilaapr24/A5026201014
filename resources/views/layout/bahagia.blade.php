<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@600&family=Martel:wght@300&family=Quicksand:wght@600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="{{URL::asset('/js/sidebar.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('/css/bahagia.css')}}">

</head>

<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large"
        onclick="w3_close()">Close &times;</button>
        <a href="/pegawai" class="w3-bar-item w3-button">Pegawai</a>
        <a href="/absen" class="w3-bar-item w3-button">Absen</a>
        <a href="/mutasi" class="w3-bar-item w3-button">Mutasi</a>
        <a href="/laptop" class="w3-bar-item w3-button">Laptop</a>
    </div>

    <div id="main">

    <div class="w3-blue">
        <p><button id="openNav" class="w3-button w3-blue w3-xlarge" onclick="w3_open()">&#9776;</button><b>Data Pegawai PT PWEB A</b></p>
    </div>

    <div class="container mt-2">
        <div class="header text-center">
            <a href="#"><img src="/images/profpic.jpg" width="100" alt="profile picture"><h4>Nabila Aprilia - 5026201014</h4></a>
        </div>
    </div>

    <div class="isi">
        <h3>@yield('judulhalaman')</h3>
        <card>
        @section('konten')
        @show
        </card>
    </div>
    
    <div class="padding-footer bg-gray font-alt container-fluid">
            <p class="text-center text-white">
                Hak Cipta Oleh<br>
                5026201014 - Nabila Aprilia
            </p>
    </div>

</body>

</html>
