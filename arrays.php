<?php
	$characters = array('Art','Bob','Danny','Jacob');
	//echo $characters;
	
	#print_r($characters);
	
	#echo $characters[2];
	
	//Adding Elements to an array
	$characters[] = 'Marvin';
	
	$characters[] = 'Blam';
	
	//print_r($characters)
	
	//Associative array
	$descript = array('Earth'=>'Kimbro', 
						'Mars'=>'Red',
						'Saturn'=>'Rings',
						);
	//Adding Elements after array has been made
	$descript['Moon'] = 'Not a planet';
	
	//print_r($descript)
	echo "Earth is described as {$descript['Earth']}"
?>