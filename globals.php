<?php
session_start();
$_SESSION["jako_bitno"]=10;
var_dump($_POST);
echo "<hr>";
var_dump($_GET);
echo "<hr>";
var_dump($_REQUEST);
echo "<hr>";
//var_dump($_SESSION);
?>
<form method="POST" action="">
<input type="text" name="x"/>
<input type="submit" value="Posalji"/>
</form>

<form method="GET" action="">
<input type="text" name="y"/>
<input type="text" name="d"/>
<input type="submit" value="Posalji"/>
</form>

<iframe src="">
</iframe>