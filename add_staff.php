<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>VSR Model School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>
			 <?php include"navbar.php";?><br>
			<img src="img/exam.jpg" style="margin-left:150px;" class="sha">
			
			<div id="section">
				
				<?php include"sidebar.php";?><br><br><br>
				
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Staff Details</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="insert into staff(TNAME,TPASS,QUAL,SAL,PNO,MAIL,PADDR,IMG) values('{$_POST["sname"]}','vsr','{$_POST["qual"]}','{$_POST["sal"]}','NUL','NULL','NULL','NULL')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>Staff Name</label><br>
					     <input type="text" name="sname" required class="input">
					     <br><br>
					     <label>Qualification</label><br>
					     <input type="text" name="qual" required class="input">
					     <br><br>
					     <label>Salary</label><br>
					     <input type="text" name="sal" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add Staff Details</button>
					</form>
				
				
				</div>
				
				
			</div>
	
			<?php include"footer.php";?><br>	 
	</body>
</html>