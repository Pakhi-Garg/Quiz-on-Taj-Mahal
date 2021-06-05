<?php
	require('db.php');
	
	session_start();
	
	if(isset($_POST['submit']))
	{
		$_SESSION['uans1']=$_POST['q1'];
		$_SESSION['uans2']=$_POST['q2'];
		$_SESSION['uans3']=$_POST['q3'];
		$_SESSION['uans4']=$_POST['q4'];
		$_SESSION['uans5']=$_POST['q5'];
		$_SESSION['uans6']=$_POST['q6'];
		$_SESSION['uans7']=$_POST['q7'];
		$_SESSION['uans8']=$_POST['q8'];
		$_SESSION['uans9']=$_POST['q9'];
		$_SESSION['uans10']=$_POST['q10'];
		
		$query="select ans from tajmahal";
		$result=mysqli_query($conn, $query);
        $answer=mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
		
		$points=0;
		
		if($answer[0]['ans']==$_SESSION['uans1']){
			$points=$points + 1;
		}
		if($answer[1]['ans']==$_SESSION['uans2']){
			$points=$points + 1;
		}
		if($answer[2]['ans']==$_SESSION['uans3']){
			$points+=1;
		}
		if($answer[3]['ans']==$_SESSION['uans4']){
			$points+=1;
		}
		if($answer[4]['ans']==$_SESSION['uans5']){
			$points+=1;
		}
		if($answer[5]['ans']==$_SESSION['uans6']){
			$points+=1;
		}
		if($answer[6]['ans']==$_SESSION['uans7']){
			$points+=1;
		}
		if($answer[7]['ans']==$_SESSION['uans8']){
			$points+=1;
		}
		if($answer[8]['ans']==$_SESSION['uans9']){
			$points+=1;
		}
		if($answer[9]['ans']==$_SESSION['uans10']){
			$points+=1;
		}
		
		$_SESSION['points']=$points;
		
		header('Location:result.php');
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title> Quiz on Taj Mahal </title>
	<link rel="stylesheet" href="home.css">
</head>
<body>
<header> 
	Quiz on Taj Mahal 
</header>
<div class="transbox">
	<table>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<tr> 
	<td> 1. </td>
	<td> Where is the Taj Mahal located? </td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q1" value="Agra, India">
	</td>
	<td>
		Agra, India
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q1" value="Delhi, India">
	</td>
	<td>
		Delhi, India
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q1" value="Lucknow, India">
	</td>
	<td>
		Lucknow, India
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q1" value="Mumbai, India">
	</td>
	<td>
		Mumbai, India
	</td>
	</tr>
	</table>
</div>
<div class="transbox">
	<table>
	<tr> 
	<td> 2. </td>
	<td> Who was the architect of Taj Mahal?
	</td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q2" value="Mumtaz Mahal">
	</td>
	<td>
		Mumtaz Mahal
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q2" value="Shah Jahan">
	</td>
	<td>
		Shah Jahan
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q2" value="Ustad Ahmad Lahouri">
	</td>
	<td>
		Ustad Ahmad Lahouri
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q2" value="Yamuna">
	</td>
	<td>
		Yamuna
	</td>
	</tr>
	</table>
</div>
<div class="transbox">
	<table>
	<tr> 
	<td> 3. </td>
	<td> When was the Taj Mahal declared a winner of the New 7 Wonders of the World (2000–2007) initiative?
	</td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q3" value="2010">
	</td>
	<td>
		2010
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q3" value="2005">
	</td>
	<td>
		2005
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q3" value="2011">
	</td>
	<td>
		2011
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q3" value="2007">
	</td>
	<td>
		2007
	</td>
	</tr>
	</table>
</div>
<div class="transbox">
	<table>
	<tr> 
	<td> 4. </td>
	<td> Who was the Persian wife of the Mughal emperor whom the Taj Mahal was built for?
	</td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q4" value="Gauhara Begum">
	</td>
	<td>
		Gauhara Begum
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q4" value="Mumtaz Mahal">
	</td>
	<td>
		Mumtaz Mahal
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q4" value="Gur-e Amir">
	</td>
	<td>
		Gur-e Amir
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q4" value="Noor Mahal">
	</td>
	<td>
		Noor Mahal
	</td>
	</tr>
	</table>
</div>
<div class="transbox">
	<table>
	<tr> 
	<td> 5. </td>
	<td> Which Mughal Emperor built the Taj Mahal?
	</td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q5" value="Jahangir">
	</td>
	<td>
		Jahangir
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q5" value="Babur">
	</td>
	<td>
		Babur
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q5" value="Akbar">
	</td>
	<td>
		Akbar
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q5" value="Shah Jahan">
	</td>
	<td>
		Shah Jahan
	</td>
	</tr>
	</table>
</div>
<div class="transbox">
	<table>
	<tr> 
	<td> 6. </td>
	<td> Of what material is the outside of the Taj Mahal mainly made?
	</td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q6" value="Ivory">
	</td>
	<td>
		Ivory
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q6" value="Gold painted stone">
	</td>
	<td>
		Gold painted stone
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q6" value="Gray stone">
	</td>
	<td>
		Gray stone
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q6" value="White marble">
	</td>
	<td>
		White marble
	</td>
	</tr>
	</table>
</div>
<div class="transbox">
	<table>
	<tr> 
	<td> 7. </td>
	<td> In what year did the Taj Mahal become a UNESCO World Heritage Site?
	</td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q7" value="1954">
	</td>
	<td>
		1954
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q7" value="1889">
	</td>
	<td>
		1889
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q7" value="1983">
	</td>
	<td>
		1983
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q7" value="1943">
	</td>
	<td>
		1943
	</td>
	</tr>
	</table>
</div>
<div class="transbox">
	<table>
	<tr> 
	<td> 8. </td>
	<td> About how many years did it take to build the main body of the Taj Mahal (excluding the surrounding structures)?
	</td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q8" value="12">
	</td>
	<td>
		12
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q8" value="10">
	</td>
	<td>
		10
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q8" value="14">
	</td>
	<td>
		14
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q8" value="16">
	</td>
	<td>
		16
	</td>
	</tr>
	</table>
</div>
<div class="transbox">
	<table>
	<tr> 
	<td> 9. </td>
	<td> When is the Taj Mahal open for night viewing?
	</td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q9" value="Only the night of the full moon">
	</td>
	<td>
		Only the night of the full moon
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q9" value="One night before, the night of, and one night after the full moon">
	</td>
	<td>
		One night before, the night of, and one night after the full moon
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q9" value="The night of the full moon, and the night after">
	</td>
	<td>
		The night of the full moon, and the night after
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q9" value="Two nights before, the night of, and two nights after the full moon">
	</td>
	<td>
		Two nights before, the night of, and two nights after the full moon
	</td>
	</tr>
	</table>
</div>
<div class="transbox">
	<table>
	<tr> 
	<td> 10. </td>
	<td> Is it true that there was going to be a black Taj Mahal built across the river from the original one?
	</td>
	</tr>
	<tr>
	<td>
		<input type="radio" name="q10" value="Yes">
	</td>
	<td>
		Yes
	</td>
	</tr>
	<tr>
	<td> 
		<input type="radio" name="q10" value="No">
	</td>
	<td>
		No
	</td>
	</tr>
	</table>
</div>
<div class="transbox-btn">
	<input type="submit" name="submit" value="Submit my answers!">
	</form>
</div>
</body>
</html>