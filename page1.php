<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conversion Site</title>
</head>
<body>

	<div style="width: 350px;
	height: 400px;
	border: 5px solid black;
	margin:-left: 400px;">

	<h3 style="color: red;">Page 1 [Home]</h3>
	<h3 style="color: red;">Conversion Site</h3>
	<p><a href="page1.php">1.Home</a><a href="page2.php">2.Conversion Rate</a><a href="page3.php">3.History</a></p>

	<p>
		<label>Converter</label>
		<input id="inputfeet" type="number" placeholder="Feet" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)" name="">
	</p>

	Result: <div id="outputInches" style="border: 1px solid black; height: 20px; width: 150px; margin: 0px;"<p><span id="outputInches"></span></p></div>

	<script>
	function LengthConverter(valNum){
		document.getElementById("outputInches").innerHTML=valNum*12;
	}
</script>

</div>

</body>
</html>