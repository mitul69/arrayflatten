<?php 
	$array = [[1,2,[3]],4];
	
	function covertToFlatArray($array){
		$flatArray = [];
		foreach($array as $elem){
			if(is_array($elem)){
				$fa = covertToFlatArray($elem);
				$flatArray = array_merge($flatArray, $fa);
			}else{
				$flatArray[] = $elem;
			}
		}
		return $flatArray;
		
	}
	$flatArray = covertToFlatArray($array);
	echo "<pre>";
	print_r($flatArray);
	exit;


?>