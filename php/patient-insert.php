<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background-image: url(../images/price-bg.png);
		}

	</style>
</head>
<body>

<?php 
include 'navbar.php';
?>

<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm_password'];
include 'database.php';

$sql="insert into patient (p_name,p_email,p_password,p_confirm) values('$name','$email','$password','$confirm')";
if(isset($_POST['submit'])){
if(mysqli_query($conn,$sql)){

	echo "<h1 style='color:white;font-size:5vw;text-shadow:5px 5px 5px blue;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);'>Sucessfully registered!! $name<h1>";
	?>

<script type="text/javascript">
	alert("Sucessfully registered");
</script>

	<?php
}

else{

	echo "not registered";
}}
?>

</body>
</html>