<?php
include 'database.php';
$id=$_GET['id'];

 $sql="delete from doc where d_id=$id";

 if (mysqli_query($conn, $sql)) {
   ?>
<script type="text/javascript">
	alert("deletion sucessfull");
	window.location.href="admin-doctor-table.php";
</script>
   <?php
} else {
   ?>
<script type="text/javascript">
	alert("deletion failed because appoinment is still there of this doctor first delete this appoinment");
	window.location.href="admin-doctor-table.php";
</script>
   <?php
}