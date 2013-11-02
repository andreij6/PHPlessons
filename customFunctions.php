<?php

echo convertSeconds(3407) . " This was called before the functions was created <br />";

function convertSeconds($seconds) {
	$minutes 	= 	floor($seconds / 60);
	$seconds 	=	$seconds % 60;
	$seconds	=  ($seconds < 10) ? '0' . $seconds : $seconds;
	return "$minutes:$seconds";  
}

echo convertSeconds(547) . '<br/>';
echo convertSeconds(550)


//if the function is in an external file you need to include the file before you can call the function
?>
