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
			<table class="table">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Pavadinimas</th>
			      <th>Kaina</th>
			      <th>Kiekis</th>
			    </tr>
			  </thead>
			  <tbody>
				<?php
					foreach ($products as $product) {
						echo "<tr><td>". $product['id'] ."</td><td>". $product['pavadinimas'] . "</td><td class='price'>". $product['kaina'] . "</td><td>". $product['kiekis'] . "</td></tr>";
					}
				?>
			  </tbody>
			</table>
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