<?php
	session_start();
	if(isset($_POST['submit']))
	{
		session_destroy();
		header('Location:home.php');
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title> Thanks </title>
	<link rel="stylesheet" href="result.css">
</head>
<body>
<header>
	Thanks for taking up the quiz 
</header>
<div class="transbox-score">
	<h3>Your score : <?php echo $_SESSION['points'];?> / 10 </h3>
	<h3>Accuracy : <?php echo $_SESSION['points']*10; ?> %</h3>
</div>
<div class="transbox-ans">
<table>
<?php
	require('db.php');
	
	$query="select qno,ans from tajmahal";
	$result=mysqli_query($conn, $query);
    $answer=mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
	
	$na="NA";
	
	echo '<tr><th>Sno</th><th>Your answer</th><th>Correct answer</th></tr>';
	echo "<tr><td>" .$answer[0]['qno']. "</td><td>" .$_SESSION['uans1']. "</td><td>" .$answer[0]['ans']. "</td></tr>";
	echo "<tr><td>" .$answer[1]['qno']. "</td><td>" .$_SESSION['uans2']. "</td><td>" .$answer[1]['ans']. "</td></tr>";
	echo "<tr><td>" .$answer[2]['qno']. "</td><td>" .$_SESSION['uans3']. "</td><td>" .$answer[2]['ans']. "</td></tr>";
	echo "<tr><td>" .$answer[3]['qno']. "</td><td>" .$_SESSION['uans4']. "</td><td>" .$answer[3]['ans']. "</td></tr>";
	echo "<tr><td>" .$answer[4]['qno']. "</td><td>" .$_SESSION['uans5']. "</td><td>" .$answer[4]['ans']. "</td></tr>";
	echo "<tr><td>" .$answer[5]['qno']. "</td><td>" .$_SESSION['uans6']. "</td><td>" .$answer[5]['ans']. "</td></tr>";
	echo "<tr><td>" .$answer[6]['qno']. "</td><td>" .$_SESSION['uans7']. "</td><td>" .$answer[6]['ans']. "</td></tr>";
	echo "<tr><td>" .$answer[7]['qno']. "</td><td>" .$_SESSION['uans8']. "</td><td>" .$answer[7]['ans']. "</td></tr>";
	echo "<tr><td>" .$answer[8]['qno']. "</td><td>" .$_SESSION['uans9']. "</td><td>" .$answer[8]['ans']. "</td></tr>";
	echo "<tr><td>" .$answer[9]['qno']. "</td><td>" .$_SESSION['uans10']. "</td><td>" .$answer[9]['ans']. "</td></tr>";

?>
</table>
</div>
<div class="transbox-btn">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="submit" name="submit" value="Close">
	</form>
</div>
</body>
</html>