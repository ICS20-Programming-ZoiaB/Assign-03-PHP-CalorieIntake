<?php

//Get user input of total calories per day
  $totalCalories = floatval($_POST['totalCalories']);

//Calculate and display number of calories of protein and carbohydrate
  $protein = 0.2 * $totalCalories;
  $carbohydrates = 0.55 * $totalCalories;
  $proteinRounded = round($protein, 2);
  $carbohydratesRounded = round($carbohydrates, 2);
?>

  <h4>Results</h4>
 The amount of calories of protein you should eat is  <?php echo "$proteinRounded" ?> and the amount of calories of carbohydrate you should eat is <?php echo "$carbohydratesRounded" ?>.