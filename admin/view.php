<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col-6">
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
						echo "<tr><td>". $product['id'] ."</td><td>". $product['pavadinimas'] . "</td><td class='price'>". $product['kaina'] . "</td><td>". $product['kiekis'] . "</td><td><a class='btn btn-sm btn-danger' href='?delete=". $product['id'] ."' >Delete</a></td></tr>";
					}
				?>
			  </tbody>
			</table>
		</div>
		<div class="col-6">
			<h1>Pridėti prekę</h1>
        <form method="POST">
            <div class="form-group">
              <label>Pavadinimas</label>
              <input class="form-control" type="text" name="pavadinimas">
            </div>
            <div class="row">
              <div class="form-group col">
                <label>Kaina</label>
                <input class="form-control" type="text" name="kaina">
              </div>

            </div>
            <div class="row">
              <div class="form-group col">
                <label>Kiekis</label>
                <input class="form-control" type="text" name="kiekis">
              <div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Itraukti</button>
        </form>
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