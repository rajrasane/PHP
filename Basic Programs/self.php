<html>
	<body>
		<form method='GET' action='self.php'>
			Enter Number1 : 
			<input type='number' name='a'/>
			Enter Number2 : 
			<input type='number' name='b'/>
			<input type='submit' value="Submit"/>
		</form>		
	</body>
	
	<?php
		$a = $_GET['a'];
		$b = $_GET['b'];
		$sum = $a + $b;
		echo "Addition of $a and $b is $sum";
	?>
</html>
