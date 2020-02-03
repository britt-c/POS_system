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
		<button class="btn" type="button" onclick="pos.price.value += '1'">1</button>
		<button class="btn" type="button" onclick="pos.price.value += '2'">2</button>
		<button class="btn" type="button" onclick="pos.price.value += '3'">3</button>
		<br>
		<button class="btn" type="button" onclick="pos.price.value += '4'">4</button>
		<button class="btn" type="button" onclick="pos.price.value += '5'">5</button>
		<button class="btn" type="button" onclick="pos.price.value += '6'">6</button>
		<br>
		<button class="btn" type="button" onclick="pos.price.value += '7'">7</button>
		<button class="btn" type="button" onclick="pos.price.value += '8'">8</button>
		<button class="btn" type="button" onclick="pos.price.value += '9'">9</button>
		<br>
		<button type="button" class="btn" disabled>💰</button>
		<button class="btn" type="button" onclick="pos.price.value += '0'">0</button>
		<button type="button" class="btn" disabled>💰</button>
		<br>
		<input class="btn" id="add" type="submit" value="+ Ledger">
		<button class="btn" id="clear" type="button">C</button>
		<br>
	</div>
	</form>
	</div>
	<div class="column">
	<div class="ledger">
	<h1>Ledger</h1>
		<div class="led-container">
		</div>
		<input class="btn" id="save" type="submit" value="Save Till">	
	</div>
	</div>
	</div>
	<script src="./app.js"></script>
 </body>
</html>

