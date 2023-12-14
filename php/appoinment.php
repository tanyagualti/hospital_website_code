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

           @media screen and (min-width: 1000px) {
   #text{
    font-size: 5vw;
       }
}
		 @media screen and (max-width: 1000px) {
   #text{
      font-size:10vw;
       }
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
 $day=$_POST['day'];
 $time=$_POST['time'];
$doctor_id=$_POST['doctor'];
 $msg=$_POST['msg']."<br>";

include 'database.php';
 $sql="insert into appointment (name,email,day,time,doctor,msg) values('$name','$email','$day','$time',$doctor_id,'$msg')";

if(mysqli_query($conn,$sql)){
	echo "<h1 id='text' style='color:white;text-shadow:5px 5px 5px blue;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);'>Sucessfully appoinment!! $name<h1>";

	?>
<script type="text/javascript">
	alert("Sucessfull get appoinment");
</script>

	<?php
}else{
echo "appoinment failed";
}
?>
</body>
</html>