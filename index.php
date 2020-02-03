<!DOCTYPE html>
<html>
 <head>
<link rel="stylesheet" type="text/css" href="app.css">
 </head>
 <body>
	<div class="row">
	<div class="column">
	<form name="pos">
		<input class="pricetag" type="text" name="price" placeholder="12">
		<br>
		<br>
	<div class="buttons">
		<input class="btn" type="button" value="1" onclick="pos.price.value += '1'">
		<input class="btn" type="button" value="2" onclick="pos.price.value += '2'">
		<input class="btn" type="button" value="3" onclick="pos.price.value += '3'">
		<br>
		<input class="btn" type="button" value="4" onclick="pos.price.value += '4'">
		<input class="btn" type="button" value="5" onclick="pos.price.value += '5'">
		<input class="btn" type="button" value="6" onclick="pos.price.value += '6'">
		<br>
		<input class="btn" type="button" value="7" onclick="pos.price.value += '7'">
		<input class="btn" type="button" value="8" onclick="pos.price.value += '8'">
		<input class="btn" type="button" value="9" onclick="pos.price.value += '9'">
		<br>
		<button type="button" class="btn" disabled>💰</button>
		<input class="btn" type="button" value="0" onclick="pos.price.value += '0'">
		<button type="button" class="btn" disabled>💰</button>
		<br>
		<input class="btn" id="add" type="button" value="+ Ledger">
		<input class="btn" id="save" type="button" value="Save Till">	
		<input class="btn" id="clear" type="button" value="C">
		<br>
	</div>
	</form>
	</div>
	<div class="column">
	<div class="ledger">
	<h1>Ledger</h1>
		<div class="led-container">
		</div>
	</div>
	</div>
	</div>
	<script src="./app.js"></script>
 </body>
</html>

