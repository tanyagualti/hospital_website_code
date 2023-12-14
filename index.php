<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>

   <style type="text/css">
 @media screen and (max-width: 1000px) {
  .navbar-nav{
   display: flex;
   flex-direction:column;
  }
}
@media screen and (min-width:1000px) {
  .navbar-nav{
   display: flex;
   flex-direction:row;
  }
}


    

 



   </style>

</head>
<body>
<header style="z-index: 1;">
         <div style="padding:0px;"class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="index.html"><img style="width: 100px;left: 30px;"src="images/logo.png" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop" style="height:30px;width:30px;padding:3px;"><img style=""src="images/phone-icon.png" alt="#" style=""></span>
                        <span class="iconcont" ><a style="font-size: 15px;"href="tel:800 123 456">800 123 456</a></span>    
                     </div>
                     <div class="info-inner">
                        <span class="icontop" style="height:30px;width:30px;padding:5px;"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com"style="font-size: 15px;">info@Lifecare.com</a></span>  
                     </div>
                     <div class="info-inner">
                        <span class="icontop" style="height:30px;width:30px;padding:5px;"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#" style="font-size: 15px;">Daily: 7:00am - 8:00pm</a></span>   
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- mmmmmm -->
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
                  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul id="myself"class="nav navbar-nav">
                        <li><a class="active" href="index.php">Home</a></li>
                        <!-- <li><a data-scroll href="#about">About us</a></li> -->
                        <li><a data-scroll href="php/appoinment-form.php">Appoinment</a></li>
                        <li><a data-scroll href="php/doctor-registration-form.php">Doc_portal</a></li>
                        <li><a data-scroll href="php/admin-form.php">Admin</a></li>
                        <li><a data-scroll href="php/patient-registration-form.php">patient</a></li>
                        <!-- <li><a data-scroll href="#testimonials">Testimonials</a></li> -->
                        <li><a data-scroll href="#getintouch">Contact</a></li>
                     </ul>
                  </div>
               </nav>
               <div class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- mmmmmmm -->
      </header>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>



     </script>
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
</body>
</html>
<?php

include 'php/database.php';



$sql = "SELECT * FROM banner ORDER BY id DESC;
";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $lastUpload = $row['url'];

        ?>

<img style="width: 100vw;height:100vh;"src="upload-images/<?php echo $lastUpload;?>">
        <?php
    } else {
        echo "No uploads found";
    }
} else {
    echo "Error querying the database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
