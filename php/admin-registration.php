<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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

<?php include 'navbar.php'; ?>
<div style="position:relative;width: 100vw;height: 100vh;">
		<img src="../images/price-bg.png" style="height:100%;width:100%">

	</div>
<div class="col-md-4" style="position:absolute;top:60%;left: 50%;transform: translate(-50%,-50%);">
    <div class="pricing-table pricing-table-highlighted">
   <div style="background: linear-gradient(to right, #1d86df 0%, #39b49a 100%);"class="pricing-table-header grd1">
    <h2 style="text-align: center;">Admin DashBoard</h2>
      <h3 style="text-align:center;">Admin Registration</h3>
                                 </div>
      <div class="pricing-table-space"></div>
                                
   <div class="pricing-table-features">
    <form action="../php/admin-insert.php" method="post">
      <div style="display: flex;margin-top:20px;">
                  
      <span class= "material-symbols-outlined" id="ic"> person</span>
       <input class="input" style=" width: 100%;" type="text" name="name" placeholder="admin_name">

      </div>
      <div style="margin-top:20px;display: flex;">
       <i id="ic"class="fa fa-envelope-o"></i>
      <input required style=" width: 100%;" class="input" type="email" name="email" placeholder="admin_email">

      </div>
      
      <div style="margin-top:20px;display: flex;">
      <span id="ic"class="material-symbols-outlined">encrypted</span>
      <input required style=" width: 100%;"class="input"type="password" name="password" placeholder="password">

      </div>
<div style="margin-top:20px;display: flex;">
     <span id="ic"class="material-symbols-outlined">password</span>
   <input required style=" width: 100%;" class="input" type="password" name="confirm_password" placeholder="confirm_password">

</div>
  
                                    

                                    
                                 </div>

    <div class="pricing-table-sign-up">
 <input type="submit" name="submit" style="background:linear-gradient(to right, #1d86df 0%, #39b49a 100%);top:50%;left: 50%;transform: translate(-50%,-50%);margin-top: 20px;" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 mycolor effect-1" >

         </div>

         </form>
         <h6 style="text-align:center;"> You Have an account?<a href="../php/admin-form.php">Sign in</a></h6>
       
   </div>
      </div>
      
                              </div>
                           </div>
                        </div>


</body>
</html>