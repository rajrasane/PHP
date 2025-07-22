<?php
	session_start();
	$_SESSION['name'] = $_GET['n'];
	$_SESSION['lastname'] = $_GET['ln'];
?>
<html>
	<body>
		<form method='get' action=<?php echo $_SERVER['PHP_SELF']; ?> >
		Enter first name : <input type="text" name='n'/> <br>
		Enter last name : <input type="text" name="ln" /> <br>
		<input type='submit' value="submit">
		</form>
	</body>
</html>
