<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<?php

session_start();
$id = $_SESSION['id'];
echo $id;  // Assuming you want to display the user ID

include 'database.php';

if (isset($_POST['submit'])) {

  $experience = $_POST['experience']; // Assuming it's a typo and should be 'experience'
  $duty = $_POST['duty'];
  $salary = $_POST['salary'];
  $qualification = $_POST['qualification'];
  $specialization = $_POST['specialization'];
  $contact = $_POST['contact'];
  $gender=$_POST['gender'];

  if(isset($_FILES['image'])){
   $filename=$_FILES['image']['name'];
   $tmpname=$_FILES['image']['tmp_name'];
   move_uploaded_file($tmpname,"../upload-images/".$filename);
  }

  // Fixing the SQL query
  $sql = "UPDATE doc SET experience='$experience', qualification='$qualification', specialization='$specialization', salary=$salary, duty='$duty', contact=$contact,gender='$gender', d_url='$filename' WHERE d_id=$id";

  if (mysqli_query($conn, $sql)) {
    ?>
    <script type="text/javascript">
      alert("Successful");
      window.location.href="doctor-more-details.php";
    </script>
  <?php
  } else {
    ?>
    <script type="text/javascript">
      alert("Failed");
       window.location.href="doctor-more-details.php";
    </script>
<?php
  }
}
?>

</body>
</html>