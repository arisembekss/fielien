<?php  
session_start();
unset($_SESSION['user']);
/*if (isset($_POST['blogin'])){
	header("Location: proccess.php");
}*/
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

<div class="w3-content w3-card-2 w3-center w3-white w3-animate-zoom" style="width: 50%; height: 500px; margin-top: 5%">
	<header  class="w3-container w3-teal">
		<h1>C'fielien Admin</h1>
	</header>
	<div style="width: 80%; margin-left: 10%">
		<form action="proccess.php" method="post">
		<table id="formlogin" >
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
					<input class="w3-input w3-animate-input" style="width: 40%" type="password" name="password"><br><br> 
				</td>
			</tr>
			<tr>
				<td>
				<br><br>
					<button onclick="proses()" name="blogin" class="w3-btn w3-purple w3-large w3-text-light-grey" style="width: 100%; height: 50px">Login</button>
				</td>
			</tr>
		</table>
		</form>
		<div style="display: none;margin-top: 30%" id="onproses">
		<center>
		<h1>Proccessing</h1>
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw" ></i>
		</center>
		</div>
			<br><br>
			<br><br>
			
			<br><br>
			
		<!-- </form> -->
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