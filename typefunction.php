<?php 

	$x = 10;
	printf("variable type : %s <br />", gettype($x));
	@settype($x, double);

	printf("variable type: %s <br />", gettype($x));

	if (is_integer($x)) {
		echo "Integer is true<br />";
	} else {
		echo "Integer is false<br />";
	}

	if (is_double($x)) {
		echo "Double is true<br />";
	} else {
		echo "Double is false<br />";
	}

	if (is_numeric($x)) {
		echo "Numeric is true<br />";
	} else {
		echo "Numeric is false<br />";
	}
	


 ?>