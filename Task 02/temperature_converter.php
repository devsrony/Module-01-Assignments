<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Converter</title>
  <style>
    <?php include "temperature_converter.css" ?>
  </style>
</head>

<body>
  <div class="container">
    <h2>Temperature Converter</h2>
    <form method="post" action="">
      <input type="number" name="temp" placeholder="Enter the Temperature" required><br>
      <select name="convert">
        <option value="fahrenheit">Fahrenheit</option>
        <option value="celsius">Celsius</option>
      </select><br><br>
      <button type="submit">Convert</button>
    </form><br>
    <div id="result">

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST["temp"];
        $convert = $_POST["convert"];

        switch ($convert) {
          case "fahrenheit":
            $fahrenheit = (($temp * 9 / 5) + 32);
            echo "{$temp} Celsius to fahrenheit: $fahrenheit";
            break;
          case "celsius":
            $celsius = (($temp - 32) * .5556);
            echo "{$temp} Fahrenheit to Celsius: $celsius";
            break;
        }
      }
      ?>

    </div>
  </div>
</body>

</html>