<?php 
	$data = "w3resourcerr";
	$a = strlen($data);
	$count = 0;

	for($i = 1; $i<=$a; $i++){
		if(substr($data, $i, 1) == "r"){
			$count += 1;
		}
	}
	echo $count;

?>