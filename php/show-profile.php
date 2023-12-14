<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(../images/price-bg.png);">
<?php
include 'database.php';
$email=$_GET['mail'];

$sql="select * from patient where p_email='$email'";
if($result=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($result)>0){
		while($rows=mysqli_fetch_assoc($result)){
			?>

<div class="card" style="width: 32rem;margin: 20vh auto;box-shadow:0px 0px 10px black;">
 <img src="../upload-images/<?php echo $rows['p_url'];?>" style="border-radius: 50%; padding: 80px;" class="card-img-top" alt="no image">

  <div class="card-body">
    <h5 class="card-title">Profile</h5>
    <p class="card-text" style="letter-spacing:3px;"><span style="font-weight: bolder;">Name:</span><?php echo $rows['p_name'];?></p><hr>
       <p class="card-text" style="letter-spacing:3px;"><span style="font-weight: bolder;">Gender:</span><?php echo $rows['gender'];?></p><hr>
       <p class="card-text" style="letter-spacing:3px;"><span style="font-weight: bolder;">Age:</span><?php echo $rows['age'];?></p><hr>
    <p class="card-text" style="letter-spacing:3px;"><span style="font-weight: bolder;">Height:</span><?php echo $rows['height'];?></p><hr>
    <p class="card-text" style="letter-spacing:3px;"><span style="font-weight: bolder;">Weight:</span><?php echo $rows['weight'];?></p><hr>
    <p class="card-text" style="letter-spacing:3px;"><span style="font-weight: bolder;">Phone no:</span><?php echo $rows['contact'];?></p><hr>
       <p class="card-text"style="letter-spacing:3px;"><span style="font-weight: bolder;">Address:</span><?php echo $rows['address'];?></p><hr>
          <p class="card-text" style="letter-spacing:3px;"><span style="font-weight: bolder;">Problem:</span><?php echo $rows['problem'];?></p>
  </div>

</div>
<?php
		}
	}
	else{
	?>
     <script>
     	alert("no profile available");
     	window.location.href="doctor-login-insert.php";
     </script>
	<?php
}
}

?>
</body>
</html>