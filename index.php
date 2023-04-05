<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Calorie intake Calculations, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
    <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css" />
    
    <!-- Title -->
    <title>Calorie intake Calculations, with PHP</title>
  </head>
  <body>
    
    <!-- Header -->
      <?php echo "<h1>Calorie intake Calculations, with PHP</h1>"; ?>
    
    <!-- Text -->
    <br>
    <br>
      <?php
        echo "<p>This web page will convert Fahrenheit to Celsius.<p>";
        ?>

    <!-- Image -->
    <center>
    <img src="./images/temperature.png" alt="formula" width="400" length="400">
    </center>

    <!-- User Input -->
      <?php echo "<h3>Your Input, in Fahrenheit:</h3>"; ?>
      <form action="./results.php" method="post" target="result">
        <label for="fahrenheit">Temperature in Fahrenheit:</label>
        <input type="float" step="0.01" name="fahrenheit" placeholder="Degrees Fahrenheit..."><br><br>
        <input type="submit" value="Click to convert!" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      </form>
    
    <!-- Iframe for results -->
    <br>
    <iframe id="result" name="result">
    </iframe>
  </body>
</html>