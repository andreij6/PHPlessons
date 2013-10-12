<?php 
	//Variables 
		//use Camel case or Snake Case
		//Letters numbers and underscore
		//first character after $ must be a letter
	$firstName = 'Andre\'';			//escape
	$lastName = "Jones'";
	echo $firstName;			// "Andre"
	
	//	Single-Comments
	#   Single-Comment
	/*
	 * multii-line Comment
	 */
	 
	 //Increment and decrement operators
		 //Post
		 $x = 0;
		 $x++;		//$x +=1
		 $x--;		//$x -=1
		//Pre
		++$x;		//pre-increment
		--$x;		//pre-decrement
		
	//Comparison Operators
	$x = (2 === 3); 	// false // identical
	$x = (2 !== 3); 	// true // not identical
	 
	$x = (1 == "1");	// true (same value)
	$x = (1 === "1"); 	// false (different types)
	
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