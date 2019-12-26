<?php
	session_start();

	$connect = mysqli_connect('localhost','root','toor','hs2');
	
	$user_id=$_POST['user_id'];
	$pw=$_POST['pw'];
	$query = "select * from User_table where user_id='$user_id'";
	$result = mysqli_query($connect,$query);
	mysqli_data_seek($result,0);
	if(mysqli_num_rows($result)>=1)
	{
		$row=mysqli_fetch_assoc($result);
		if($row['pw']==$pw)
		{
			$_SESSION['gender']=$row['gender'];
			$_SESSION['name']=$row['name'];
			$_SESSION['user_id']=$row['user_id'];
			$_SESSION['height']=$row['height'];
			$_SESSION['weight']=$row['weight'];
			$_SESSION['freq']=$row['freq'];
			$_SESSION['goal']=$row['goal'];
			$_SESSION['duration']=$row['duration'];
			if(isset($_SESSION['user_id']))
			{
			?> <script>
				alert("LOGIN OK");
				location.replace("./web.html");
			</script>
<?php	

			
			}
			else
			{
				echo " SESSION FAIL";
			}
		}
		else
		{
			echo " ID OR PW ERROR";
		}
		
	}
	else
	{
		echo "FUCK......";
		print_r($user_id);
		print_r(mysqli_num_rows($result));
		print_r($pw);
		echo "....ID OR PW ERROR";
		echo "2";
	}
	
	
?>

