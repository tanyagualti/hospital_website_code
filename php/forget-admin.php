
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 <!-- Site Icons -->
   <link rel="shortcut icon" href="../images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="../style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="../css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="../css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="../css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="../css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="../js/modernizer.js"></script>
   <!-- [if lt IE 9] -->

   <style type="text/css">

    .input{
    outline: none;
    border: none;
    border-bottom: 1px solid grey;
}
#ic{
    margin-top: 20px;
    border-right: 1px solid #ececec;

    width: 30px;
    color: #c2c2c2;
    display: inline-block;
    margin-right: 10px;
    padding-right: 5px;
    border-right: 1px solid #ececec;
}
      @media screen and (max-width: 1000px) {
   .pricing-table{
      width: 80vw;
       }
}
</style>

</head>
<body>

<?php
session_start();
$email=$_POST['email'];
$_SESSION['email']=$email;
?>

<div style="position:relative;width: 100vw;height: 100vh;">
		<img src="../images/price-bg.png" style="height:100%;width:100%">

	</div>
<div class="col-md-4" style="position:absolute;top:60%;left: 50%;transform: translate(-50%,-50%);">
    <div class="pricing-table pricing-table-highlighted">
   <div style="background: linear-gradient(to right, #1d86df 0%, #39b49a 100%);"class="pricing-table-header grd1">
    <h2 style="text-align: center;">Reset Password</h2>
      <h3 style="text-align:center;">Forget</h3>
                                 </div>
      <div class="pricing-table-space"></div>
                                
   <div style="margin:0px;"class="pricing-table-features">
    <form action="update-admin-password.php" method="post">
      <div style="display: flex;margin-top:20px;">
                  
     <span id="ic"class="material-symbols-outlined">encrypted</span>
       <input required class="input" style=" width: 100%;" type="password" name="new_password" placeholder="new password">

      </div>

      
      <div style="margin-top:20px;display: flex;">
      <span id="ic"class="material-symbols-outlined">encrypted</span>
      <input required class="input"type="password" style=" width: 100%;" name="confirm_password" placeholder="Confirm password">

      </div>

  </div>





    <div class="pricing-table-sign-up">
 <input  name="submit3" required type="submit" style="background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);top:50%;left: 50%;transform: translate(-50%,-50%);margin-top: 20px;" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 mycolor effect-1" >

         </div>
          

        

         </form>



       
   </div>
      </div>
      
                              </div>
                           </div>
                        </div>




</body>
</html>