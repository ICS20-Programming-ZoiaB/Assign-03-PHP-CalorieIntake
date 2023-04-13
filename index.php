<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Caloric Intake Calculations, with PHP">
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
    <title>Caloric Intake Calculations, with PHP</title>
  </head>
  <body>
    
    <!-- Header -->
      <?php echo "<h1>Caloric Intake Calculations, with PHP</h1>"; ?>
    
    <!-- Text -->
    <br>
    <br>
      <?php
        echo "<p>This web page calculates how many calories of protein and carbohydrate you should eat each day based on your total daily caloric intake.<p>"
        ?>

    <!-- Image -->
    <center>
    <img src="./images/foodpyramid.png" alt="Food Pyramid" width="500" length="500">
    </center>

    <!-- User Input -->
      <?php echo "<h3>Your Input:</h3>"; ?>
      <form action="./results.php" method="post" target="result">
        <label for="totalCalories">Total calories (per day):</label>
        <input type="float" step="0.01" min="0" name="totalCalories" placeholder="Total calories..."><br><br>
        <input type="submit" value="Calculate" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      </form>

    <!-- Iframe for results -->
    <br>
    <iframe id="result" name="result">
    </iframe>

    <!-- Slider with Starting Value -->
    <?php echo "<h5>On the scale, show how healthy you think your current diet is:</h5>"; ?>
    <input class="mdl-slider mdl-js-slider" type="range"
  min="0" max="100" value="25" tabindex="0">
  </body>
</html>