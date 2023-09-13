<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Calculator</title>
  <style>
    <?php include "grade_calculator.css" ?>
  </style>
</head>

<body>
  <div class="container">
    <h2>Grade Calculator</h2>
    <form method="post" action="">
      <label>Web Design Score</label><br>
      <input type="number" name="num1" placeholder="Enter your Web Design Score" required><br>
      <label>Web Development Score</label><br>
      <input type="number" name="num2" placeholder="Enter your Web Development Score" required><br>
      <label>Digital Marketing Score</label><br>
      <input type="number" name="num3" placeholder="Enter your Digital Marketing Score" required><br><br>
      <button type="submit">Calculate</button>
    </form>
    <div id="result">

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        $avg = ($num1 + $num2 + $num3) / 3;

        if ($avg >= 70 && $avg <= 100) {
          echo "Your average Score is {$avg} and your Grade is A";
        } elseif ($avg >= 60 && $avg < 70) {
          echo "Your average Score is {$avg} and your Grade is B";
        } elseif ($avg >= 50 && $avg < 60) {
          echo "Your average Score is {$avg} and your Grade is C";
        } elseif ($avg >= 33 && $avg < 50) {
          echo "Your average Score is {$avg} and your Grade is D";
        } else {
          echo "Your average Score is {$avg} and your Grade is F";
        }
      }
      ?>

    </div>
  </div>
</body>

</html>