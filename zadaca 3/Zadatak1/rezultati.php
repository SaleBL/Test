<form method="GET" action="rezultati.php">
<input type="text" name="rijec"/>
<input type="submit" value="Pretrazi"/>
</form>

<iframe src="http://www.bing.com/search?q=<?php echo $_GET['rijec']; ?>" width=100% height=100%>
</iframe>