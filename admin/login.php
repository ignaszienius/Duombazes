<?php
session_start();

if(isset($_POST['submit'])) {
	if ($_POST['user'] == $_POST['password']) {
		$_SESSION['user'] = $_POST['user'];
		header('Location: index.php');
	} else {
	 echo "Incorrect!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
	<div class="row head bg-warning">
		<h1>Please login</h1>
	</div>
	<div class="row">
		<div class="col-4">
			<?php
			 if(isset($error)) {
				echo '<div class="alert alert-danger"><strong>' . $error . '</strong></div>';
			}
			?>
			<form method="POST">
				<label class="form-check-label">Username</label>
				<input class="form-control" type="text" name="user">
				<label class="form-check-label">Password</label>
				<input class="form-control" type="text" name="password">
				<button type="submit" name="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
