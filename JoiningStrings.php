<?php
	$firstName 		= 'Andre';
	$lasName 		= 'Jones';
	$book			= '"Hitchhiker\'s Guid to the Galaxy"';
	$author			= 'Douglas Adams';
	$timesListened	= 25;
	$newLines		= "\r\n\r\n";
	#concat
	//$fullName 		= $firstName . $lasName;	//PHP ignores whitespace
	$fullName 		= $firstName . " " . $lasName;
	//echo $fullName . '<br>';
	
	$recomendation	= "$book by $author";
	//echo $recomendation;
	
	$message = "Name $fullName $newLines";
	$message .= "Reccomendation: $recomendation $newLines";
	$message .= "Times listened: $timesListened";
	echo $message;
	
?>
