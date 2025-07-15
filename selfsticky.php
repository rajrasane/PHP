<html>
	<body>
		<form method='GET' action=<?php echo $_SERVER['PHP_SELF']?>>
			Enter Number1 : 
			<input type='number' name='a' value=<?php if(isset($_GET['a'])) echo $_GET['a'] ?>>
			Enter Number2 : 
			<input type='number' name='b' value=<?php if(isset($_GET['b'])) echo $_GET['b'] ?> >
			<input type='submit' value="Submit" name="submit" />
		</form>		
	</body>
	
	<?php
		if(isset($_GET['submit'])){
			$a = $_GET['a'];
			$b = $_GET['b'];
			$sum = $a + $b;
			echo "Addition of $a and $b is $sum";
		}
	?>
</html>
