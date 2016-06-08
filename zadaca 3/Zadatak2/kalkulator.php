<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kalkulator</title>
</head>
<body>
<form method="post" attribute="post" action="disp_form.php">
<p>Prvi broj:<br/>
<input type="text" id="first" name="first"></p>

<label for="operacija"></label>
<select name="operacija">
	<option value="nijeIzabrano">Racunska operacija:</option>
	<option value="add" checked="true">+ (sabiranje)</option>
	<option value="subtract">- (oduzimanje)</option>
	<option value="times">* (mnozenje)</option>
	<option value="divide">/ (dijeljenje)</option>			
</select>

<p>Drugi broj:<br/>
<input type="text" id="second" name="second"></p>

<button type="submit" name="answer" id="answer" value="answer">Izracunaj</button>
</form>
</body>
</html>