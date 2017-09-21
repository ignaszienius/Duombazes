<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col">
			<h1>Prekės</h1>
				<?php
					foreach ($products as $product) {
						echo "<div class='col-4'><table class='table table-hover table-inverse'><tr><td> Pavadinimas</td><td>". $product['pavadinimas'] . "</td></tr><tr class='price'><td>Kaina</td><td>". $product['kaina'] . "</td></tr><tr><td>Kiekis</td><td>". $product['kiekis'] . "</td></tr><tr><td>Foto</td><td><img src='images/"  . $product['image'] . "'style='height:100px;'></td></tr></table></div>";
					}
				?>
		</div>		
	</div>
	<script>
		$prices = document.getElementsByClassName('price');
		for (var i = 0; i <= $prices.length - 1; i++) {
			console.log($prices[i]);
		}
	</script>
</body>
</html>