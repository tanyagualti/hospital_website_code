<?php
     session_start();
     $id= $_SESSION['id'];
     
if(isset($_POST['submit'])){

	$problem=$_POST['problem'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
include 'database.php';
if(isset($_FILES['image'])){
   $filename=$_FILES['image']['name'];
   $tmpname=$_FILES['image']['tmp_name'];
   move_uploaded_file($tmpname,"../upload-images/".$filename);
	}

     
      $sql="update patient set problem='$problem', address='$address' , contact =$contact ,height='$height' ,weight='$weight',age=$age,gender='$gender',p_url='$filename' where p_id=$id";

if(mysqli_query($conn,$sql)){
	?>
	<script type="text/javascript">
		alert("Sucessfull");
		window.location.href="patient-login-insert.php";
	</script>
	<?php

}
else{
	?>
	<script type="text/javascript">
		alert("Failed");
		window.location.href="patient-login-insert.php";
	</script>
	<?php
}
}
?> 