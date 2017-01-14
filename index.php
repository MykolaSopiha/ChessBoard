<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chess test</title>
	<style type="text/css">
		.container {
			margin: 0 auto;
			text-align: center;
		}
		.container form {
			display: inline-block;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="function.php" method="post">
			<fieldset>
				<legend>Board parameters</legend>
				<p>Rows:<input type="number" name="rows"></p>
				<p>Columns:<input type="number" name="cols"></p>
				<p>3<sup>th</sup> color: <input type="text" name="color"></p>
				<p>For example: #cc0055, rgb(255,255,255)...</p>
				<input type="submit" name="send" value="Send!">
			</fieldset>
		</form>
	</div>
</body>
</html>