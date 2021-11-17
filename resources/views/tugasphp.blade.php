<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sum of Squares</title>

    <script>
        $(document).ready(function () {
            $("#desc").click(function () {
                $("#deskripsi").toggle();
            });
        });
    </script>
</head>

<body>
    <div style="position: relative;">
    <h1>Welcome to Nabila's Square Calculator</h1>
    <button id="desc">Click to Show/Hide Description</button>
    <p id="deskripsi">For example, the call of sumOfSquares(3) should return 1^2 + 2^2 + 3^2 = 14.
        If your method is passed 0, return 0.</p>
    
    <div style= "float: right; margin-right: 20px;">
        <h6>Screenshot hasil coding Alpro</h6>
        <img src="https://i.postimg.cc/B6LKrTzF/image.png" alt="referensi" style="width:450px"><br>
        <span>Coding java dari codestepbystep (latihan dari Pak Muklason)</span>
    </div>
    </div>

    <div class="container-fluid p-5">
        <div class="text-center">
            <h2>Enter your number!</h2>
        </div>
        <form action="hitungphp" method="get">
            @csrf
            <p>Must be positive number</p><br>
            <input type="number" name="userInput" id="userInput" placeholder="Not a negative number">
            <button class="btn btn-primary" type="submit"> Submit </button>
        </form>
    </div>
</body>

</html>