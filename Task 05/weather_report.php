<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather Report</title>
  <style>
    <?php include "weather_report.css" ?>
  </style>
</head>

<body>
  <div class="container">
    <h2>Weather Report</h2>
    <form method="post" action="">
      <input type="number" name="num1" placeholder="Enter the Weather" required><br>
      <button type="submit">Calculate</button>
    </form>
    <div id="result">

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];

        if ($num1 <= 5) {
          echo "It's freezing!";
        } elseif ($num1 > 5 && $num1 <= 22) {
          echo "It's cool.";
        } else {
          echo "It's warm.";
        }
      }
      ?>

    </div>
  </div>
</body>

</html>