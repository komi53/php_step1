    <?php
    	$a = 5;
    	if ($a == 3) {
    		print("$a is 3");
    	}
    	else{
    		print("$a is not 3");
    	}
    ?>
    <br>
    <?php
	    for($i = 0; $i < 10; $i++){
	    	print("$i");
	    }
	?>
	<br>
	<?php
		function double_print($text){
			print($text . $text);
		}

		double_print("a");
		double_print("bc");
	?>
	<br>
	<?php
		$a1 = array("one", "two", "three");
		$a1[] = "four";
		$a1[0] = "one?";
		print_r($a1);
	?>