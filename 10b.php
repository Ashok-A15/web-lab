<!doctype html>
<html>
<head>
<title>prime number checker</title>
</head>
<body>
	<h1>prime number checker</h1>
	<form method="POST">
		<label>Number</label>
		<input name="num" required/>
		<button type="submit">check!</button>
	</form>
	<p>
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$num=$_POST["num"];
			if($num==1 || $num==0){
				echo "the number $num is neither prime not not prime";
				return;
			}
			$flag=0;
		for($i=2;$i<=sqrt($num);$i++){
			if($num%$i==0){
				$flag=1;
			}
		}
		if($flag==1)	
			echo "the number $num is not a prime number";
		else
			echo "the number $num is prime number";
		}
?>
</p>
</body>
</html>			
	


		
	
	
