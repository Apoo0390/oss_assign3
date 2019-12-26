<?php
	$connect = mysqli_connect('localhost','root','toor','hs2');
	$name=$_POST[name];
	$pw=$_POST[pw];
	$user_id=$_POST[user_id];
	$weight=$_POST[weight];
	$height=$_POST[height];
	$freq=$_POST[freq];
	$goal=$_POST[goal];
	$duration=$_POST[duration];
	if($_POST['male']==1)
	{
		$gender=1;
	}
	else
	{
		if($_POST['female']==1)
			$gender=0;
	}
	$query2 = "insert into User_table(user_id,gender,name,pw,weight,height,freq,goal,duration) values('$user_id',$gender,'$name','$pw',$weight,$height,$freq,$goal,$duration);";
	$result = mysqli_query($connect,$query2);
	if($result)
	{
		?> <script>
			alert("REGISTER OK");
			location.replace("./login.html");
		</script>
<?php
	}
	else
	{
		echo "FAIL\n";
		print_r($query2);
	}
?>
