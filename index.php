<!DOCTYPE html>
<html>
 <head>
<link rel="stylesheet" type="text/css" href="app.css">
 </head>
 <body>
	<div class="row">
	<div class="column">
	<form action="" method="post" name="pos">
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
		<input class="btn" id="add" type="submit" value="+Ledger">
		<input class="btn" id="clear" type="button" value="C" onclick="pos.price.value = ''">
		<br>
	</div>
	</form>
	</div>
	<div class="column">
	<div class="ledger">
	<h1>Ledger</h1>
		<form action="submit.php" method="post">
		<div class="led-container">

		<?php 
			$p = $_POST["price"];
			$ledger = [];
			array_push($ledger, $p);
			$ledglength = count($ledger);
			
			for($x=0; $x < $ledglength; $x++)
				{
					echo $ledger[$x];
					echo "<br>";
				}	
		?>
		</div>
		<button class="btn" id="save" name="saveledg" type="submit"  value="<?php
			$ledglength = count($ledger);
			
			for($x=0; $x < $ledglength; $x++)
				{
					echo $ledger[$x];
				}	
			 ;?>" >Save Till</button>	
	</form>
	</div>
	</div>
	</div>
	<script src="./app.js"></script>
 </body>
</html>

