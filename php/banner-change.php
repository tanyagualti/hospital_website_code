<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>banner change</title>
	<style type="text/css">
		.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.inputfile + label {
	
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: black;
    border-radius: 10px;
    padding: 10px;
    display: inline-block;
}

form{
	margin-top:20%;
	margin-left: 40%;
}
.inputfile:focus + label,
.inputfile + label:hover {
    background-color:blue;
}
.submit{
	font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: black;
    border-radius: 10px;
    padding: 10px;
    display: inline-block;
}
.submit:hover{
color: black;
background-color: white;
}
	</style>

</head>
<body style="background:url(../images/service-bg.png)">
<?php
include 'navbar.php';
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
	<h1 style="margin-bottom: 40px;font-size: 30px;">Change Banner of Home Page of Website</h1>
		<input class="inputfile" name="image" id="image" type="file">
		<label for="image">Choose file</label>
		<input class="submit" name="submit" type="submit" >

</form>

<?php
include 'database.php';
if (isset($_POST['submit'])) {
	if(isset($_FILES['image'])){
	 
	 $filename=$_FILES['image']['name'];
	 $temp=$_FILES['image']['tmp_name'];
	  
	 if( move_uploaded_file($temp,"../upload-images/".$filename)){
        
     $sql = "INSERT INTO banner (url) VALUES ('$filename')";

        if(mysqli_query($conn,$sql)){
        	echo "insert";
        }

	 	?>
<script type="text/javascript">
	alert("Upload Sucessfully");
	window.location.href="../index.php";
</script>
	 	<?php
	 }
	 else{
	 	?>
<script type="text/javascript">
	alert("Upload fail");
</script>
	 	<?php
	 }

	}
}
?>

</body>
</html>