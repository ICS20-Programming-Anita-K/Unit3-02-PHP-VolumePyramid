<?php
	// get the bases and height from the textfields
	$sideA = $_POST['sideA'];
  $sideB = $_POST['sideB'];
	$height = $_POST['height'];

	// calculate the area
	$area = ($sideA * $sideB * $height)/6 ;
  $areaRounded = number_format ($area, 2) ;
?>
<!-- Answers -->
The area of the trapezoid is <?php echo "$areaRounded"; ?>cm<sup>2</sup>.