<html>
<head>
    <title>Compound calculator</title>
		<meta charset="iso-8859-1">
		<meta name="author" content="ジェイ">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<script>
	function handleChange(input) {
		if (input.value < 0) input.value = 0;
		if (input.value > 100) input.value = 100;
	}
</script>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Starting quantity:  <input type="number" Name="Num1"><br>
	Yearly interest (percentage): <input type="number" step="any" onchange="handleChange(this);" Name="Num2"><br>
    Number of years saving: <input type="number" Name="Num3"><p>
    <input type="Submit" value="Calculate">
    </form>
	<?php
	if (count($_POST) > 0 && isset($_POST["Num1"]) && isset($_POST["Num2"]) && isset($_POST["Num3"])){
	
		$x = 0;
		$sum = $_POST["Num1"];
		$percent = $_POST["Num2"] / 100 + 1;
		
		while ($x <= $_POST["Num3"]) {
			echo "Year: " . $x . " = ";
			echo "$";
			echo round ($sum, 2);
			echo "<br />";
			$sum = $sum * $percent;
			$x++;
		}
	}
	?>
</body>
</html>