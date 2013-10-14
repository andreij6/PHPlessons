<?php 
/*
	if(condition is true){
		do something
	}elsif(second condition){
 * 		perform alternative task
 *  }else{
		do something different
	}
*/

	#SWITCH STATEMENT
	$name = 'Arthur';
	
	switch($name) {
		case 'Arthur':
			echo 'I could never get the hang of Thursdays';
			break;
		case 'Marvin';
		case 'Paranoid Android';
			echo "I've got this terrible pain in all the diodes down my left-hand side";
			break;
		default:
			echo 'Is that really a piec of fair cake';
	}
	# echo's I could never get the hang of Thursdays
	
	#TERNARY 
	$value = 40;
	
	$result = ($value == 42 ) ? 'The answer' : 'Keep calculating';
	
	echo $result		//False
	
?>