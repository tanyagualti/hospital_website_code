<?php
include 'database.php';
$id=$_GET['id'];
 $sql="delete from patient where p_id=$id";

 if(mysqli_query($conn,$sql)){
 	?>
<script type="text/javascript">
	alert("deletion sucessfull");
	window.location.href="admin-patient-table.php";
</script>
 	<?php
 }
 else{
 	?>

<script type="text/javascript">
	alert("deletion failed");
	window.location.href="admin-patient-table.php";
</script>
 	<?php
 }
?>