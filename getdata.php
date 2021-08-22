<?php
	$val = $_GET['selectvalue'];

	$cat1 = array('Breakfast','Lunch','Dinner');
	$cat2 = array('Chinese','Indian','Mexican','Italian','Japanese','American');
	$cat3 = array('Bread','Corn','Wheat','Fruit');

	switch ($val) {
		case 'Meal Time': foreach ($cat1 as $mealval) {
			echo "<option value='$mealval'>$mealval</option>";
		}
		break;
		case 'Cuisine': foreach ($cat2 as $cuisineval) {
			echo "<option value='$cuisineval'>$cuisineval</option>";
		}
		break;
		case 'Ingredient': foreach ($cat3 as $ingval) {
			echo "<option value='$ingval'>$ingval</option>";
		}
		break;
		
		default: echo "No Sub-Category";
		break;
	}

?>