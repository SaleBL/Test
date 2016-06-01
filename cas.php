<?php
function writeMsg() {
    echo "Hello world!";
}
$rezultat=writeMsg(); // call the function
var_dump ($rezultat);
echo "<hr>";

function faktorijel ($broj) {
	if ($broj>=1){
		$rezultat=1;
		for($i=1; $i<=$broj; $i++)
			$rezultat*=$i;
	}
	return $rezultat;
}
$f=faktorijel(5);
var_dump($f);
echo "<hr>";

$x=12;
function sabiranje ($x, $y) {
	return $x+$y;
}
$z=sabiranje(2,5);
var_dump($z);
echo "<hr>";
var_dump($_GET);
echo "<hr>";
var_dump($_POST);
echo "<hr>";
echo "<hr>";
echo "<hr>";
var_dump($_POST);

//  neka promijena 


?>