<?php

//Get user input
  $fahrenheit = floatval($_POST['fahrenheit']);

//Calculate and display
  $celsius = 5/9 * ($fahrenheit - 32);
  $celsiusRounded = round($celsius, 1)
?>

  <h4>Results</h4>
 The temperature in Celsius is  <?php echo "$celsiusRounded" ?> degrees Celsius.