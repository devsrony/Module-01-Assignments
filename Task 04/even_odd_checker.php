<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Even Odd Checker</title>
  <style>
    <?php include "even_odd_checker.css" ?>
  </style>
</head>

<body>
  <div class="container">
    <h2>Even Odd Checker</h2>
    <form method="post" action="">
      <input type="number" name="num1" placeholder="Enter the number" required><br>
      <button type="submit">Calculate</button>
    </form>
    <div id="result">

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];

        if ($num1 % 2 == 0) {
          echo "{$num1} Number is EVEN";
        } else {
          echo "{$num1} Number is ODD";
        }
      }
      ?>

    </div>
  </div>
</body>

</html>