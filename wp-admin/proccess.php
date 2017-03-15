<?php  
session_start();
require 'connect_db.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$params = array($user, $pass);
$query = "select * from admin where user='".$user."' && pass = '".$pass."'";

$result = mysqli_query($mysql, $query);

if (empty($user)) {
	# code...
	?>
		<script type="text/javascript"> 
    	alert("Harap input username"); 
    	history.back(); 
  		</script> 
		<?php
} elseif (empty($pass)) {
	# code...
	?>
		<script type="text/javascript"> 
    	alert("Harap input Password"); 
    	history.back(); 
  		</script> 
		<?php
} else{
	if (mysqli_num_rows($result) == 0) {
	# code...
		?>
		<script type="text/javascript"> 
    	alert("Wrong Username and/or Password"); 
    	history.back(); 
  		</script> 
		<?php
	} else{
		//echo "true";
	
		$_SESSION['user'] = $user;
		header("Location: home.php");
	/*ob_end_flush();
	exit();*/
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<?php include 'head.php' ?>
</head>
<body class="w3-khaki">
<?php  
//include 'nav.php';
?>

<!-- end of nav -->

 <div class="w3-content w3-card-2 w3-center w3-white " style="width: 50%; height: 500px; margin-top: 5%">
	<header  class="w3-container w3-teal">
		<h1>Login</h1>
	</header>
	<div style="width: 80%; margin-left: 10%">
		
		<!-- <table id="formlogin" style="display: none;">
			<tr>
				<td>
					<label class="w3-left w3-text-blue"><h4>Username </h4></label>
				</td>
			</tr>
			<tr>
				<td>
					<input class="w3-input w3-animate-input" style="width: 40%" type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					<label class="w3-left w3-text-blue"><h4>Password </h4></label>
				</td>
			</tr>
			<tr>
				<td>
					<input class="w3-input w3-animate-input" style="width: 40%" type="text" name="password"><br><br> 
				</td>
			</tr>
			<tr>
				<td>
					<button onclick="proses()" class="w3-btn w3-purple w3-large" style="width: 100%">Login</button>
				</td>
			</tr>
		</table> -->
		<div style="display: block;margin-top: 30%" id="onproses">
		<center>
		<h1>Proccessing</h1>
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw" ></i>
		</center>
		</div>
			<br><br>
			<br><br>
			
			<br><br>
			
		
	</div>
	
	
	
	
</div>
<script type="text/javascript">
	function proses(){
		document.getElementById('formlogin').style.display = 'none';
		document.getElementById('onproses').style.display = 'block';
	}
</script>

</body>
</html>