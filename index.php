<?php
$connect= mysql_connect("localhost" ,"Declan", "") or die(mysql_error); 


if(!$connect)
	{
	die('Could not connect: ' .mysql_error());
	}

	$message=$_POST['message'];
	//$sender =$_POST['sender']; 
	
if(isset($_POST["submit"])){
	mysql_select_db("chat");
	mysql_query("INSERT INTO message(message)VALUES('$message');") or die(mysql_error());
}
$result= mysql_query("SELECT * FROM message ORDER BY id ASC");






?>
<html>
<body>

<div id="messageBox"> 
<?php
while($row=mysql_fetch_array($result)){
echo "<span>".$row['message']."</span> <br>";
}


?>
</div>

<form method="POST" name="" action="">
<input name="message" type="text" id="texta">
<input name="submit"  type="submit" id="refresh">
          




</form>
</body>
</html>
