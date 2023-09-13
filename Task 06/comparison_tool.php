<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comparison Tool</title>
  <style>
    <?php include "comparison_tool.css" ?>
  </style>
</head>

<body>
  <div class="container">
    <h2>Comparison Tool</h2>
    <form method="post" action="">
      <input type="number" name="num1" placeholder="Enter the 1st Number" required><br>
      <input type="number" name="num2" placeholder="Enter the 2nd Number" required><br>
      <button type="submit">Compare</button>
    </form><br>
    <div id="result">

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $compare = ($num1 > $num2) ? "$num1 is larger than $num2" : "$num2 is larger than $num1";

        echo $compare;
      }
      ?>

    </div>
  </div>
</body>

</html>