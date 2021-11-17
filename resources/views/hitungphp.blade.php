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
</head>
<body>

<?php 
        function sumOfSquares($n) {
            if ($n < 0) return "not countable";
            if ($n == 0) return 0;
            else return $n * $n + sumOfSquares($n - 1);
        }
?>

<div class="container">
    <div class="card mt-4">
        <h2>Nabila's Calculator</h2>
        <div class="alert alert-success">The calculation is successful!</div>
        <div class="container">
        The sum of squares from 0 to <?php
            echo $_GET["userInput"];
        ?>
         is <?php echo sumOfSquares($_GET["userInput"]);?>
    </div> 
</div>

</body>
</html>