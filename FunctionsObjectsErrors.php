<?php
/*
$version = phpversion(); 

echo $version . '<br>';					//5.4.19;

$name = 'ANDRE';
echo strtolower($name) . '<br>';		//andre		
echo $name . '<br>';								//ANDRE - original value remains unchanged

$name = ucfirst(strtolower($name));

echo $name
*/

$input = '<p> High <script> alert("Boo!");</script><a href="http://www.espn.com"> visit my site</a>. </p>';

echo strip_tags($input);
echo strip_tags($input, '<p><a>');

?>