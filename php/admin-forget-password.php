<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background:url(../images/service-bg.png)">
<?php
include 'navbar.php';

?>

<form action="forget-admin.php" method="post">
	 <div style="margin-top: 30%;margin-left: 50%;transform: translate(-50%,-50%);">
	 <input style="height: 100px;width: 500px;border-radius: 10px;text-align: center;font-size: 20px;" placeholder="enter the email" type="email" name="email">
	 <div style="width: 30vw;text-align: center;">
     <input style="background: blue;color: white;border: 2px solid white; margin-top:30px;border-radius: 10px;height: 50px;width: 150px;box-shadow: 0px 0px 10px white;"type="submit" name="submit">
 </div>
 </div>
</form>
</body>


</html>