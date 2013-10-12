<?php 
	//Variables 
		//use Camel case or Snake Case
		//Letters numbers and underscore
		//first character after $ must be a letter
	
	$firstName = 'Andre\'';			//escape
	$lastName = "Jones'";
	echo $firstName;				// "Andre"
	
	//	Single-Comments
	
	#   Single-Comment
	
	/*
	 * multii-line Comment
	 * 
	 */
	 
	 
	//Strings
		// to use a variable inside of the string us double quotes
		$book ='Hitchhiker';
		echo "I love $book";		//I love hitchikeer
		
		//Concat
			$a = 'Hello';
			$b = $a . " World"; 		// Hello World 
		
		//Escape Characters pg14
		//Joining strings
		
		//Character Reference
			$s = 'Hello';
			$s[0] = 'J';
			echo $s; // "Jello"	 
?>