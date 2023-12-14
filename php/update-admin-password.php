<?php
session_start();
$email=$_SESSION['email'];
include 'database.php';
$new=$_POST['new_password'];
$confirm=$_POST['confirm_password'];

if(isset($_POST['submit3'])){
    if($new==$confirm){
         $sql = "UPDATE admin SET password='{$new}' where email='{$email}'";
        
          if( mysqli_query($conn, $sql)){
            ?>
<script type="text/javascript">
    alert("Sucessfully Reset");
    window.location.href="admin-forget-password.php";
</script>
            <?php
          }
          else{
            ?>
<script type="text/javascript">
    alert("Failed");
     window.location.href="admin-forget-password.php";
</script>
            <?php
          }

    }
}
?>