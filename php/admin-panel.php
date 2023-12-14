<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/admin-panel.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
		@media screen and(min-width:1000px){
.card{
  padding: 100px;
}
}
	</style>
</head>
<body>

<?php
include 'navbar.php';
?>

<div class="container py-5" style="margin-top:30vh;">
  <div class="row">
    <div class="col-lg-12 p-5">
      <h1> <i style="font-size:50px;" class="fa fa-tachometer" aria-hidden="true"></i>Admin Panel</h1>
      <hr />
    </div>
  </div>
  <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 p-2" style="  width: 24.666667%;">
      <a class="text-decoration-none" href="admin-patient-table.php">
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
         <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="white" d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"/></svg>
            <hr />
            <p class="card-title lead" style="color:white;">Pateints</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 p-2" style="  width: 24.666667%;">
      <a class="text-decoration-none" href="admin-doctor-table.php">
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
          	<svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="white" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>
   <hr />
            <p class="card-title lead" style="color:white;">Doctors</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 p-2" style="  width: 24.666667%;">
      <a class="text-decoration-none" href="admin-appoinment-table.php">
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
        <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="white"d="M128 0c13.3 0 24 10.7 24 24V64H296V24c0-13.3 10.7-24 24-24s24 10.7 24 24V64h40c35.3 0 64 28.7 64 64v16 48V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 144 128C0 92.7 28.7 64 64 64h40V24c0-13.3 10.7-24 24-24zM400 192H48V448c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V192zM329 297L217 409c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47 95-95c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
            <hr />
            <p class="card-title lead" style="color:white;">Appoinments</p>
          </div>
        </div>
      </a>
    </div>

  


    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 p-2" style="  width: 24.666667%;">
      <a class="text-decoration-none" href="banner-change.php" >
        <div class="card p-3 shadow bg-purple text-center border-0">
          <div class="card-body">
           <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
  <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
  <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10"/>
</svg>
            <hr />
            <p class="card-title lead" style="color:white;">Banner Change</p>
          </div>
        </div>
      </a>
    </div>

  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modelHELP" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Technical Support
          24/7</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5">
        <p>
          <small>(Mon - Sat / 10AM - 6PM)</small>
        </p>
        <hr />
        <p> <i class="fa fa-envelope mr-3" aria-hidden="true"></i> </p>
        <p><i class="fa fa-volume-control-phone mr-3" aria-hidden="true"></i> +91-123654789 </p>

      </div>

    </div>
  </div>
</div>
</body>
</html>