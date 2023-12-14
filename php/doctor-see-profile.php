<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<title></title>
	<style type="text/css">
		.gradient-custom {
/* fallback for old browsers */
background-color: black;

}
	</style>
</head>
     <body style="background-color:whitesmoke;">
	<?php
	 session_start();
     $id= $_SESSION['id'];
     // include 'navbar.php';
     include 'database.php';

     $sql="select * from doc where d_id=$id";
     if($result=mysqli_query($conn,$sql)){
     	if(mysqli_num_rows($result)>0){
     		if($rows=mysqli_fetch_assoc($result)){
     			?>

<section class="vh-100"  >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;box-shadow: 0px 0px 10px black;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="../upload-images/<?php echo $rows['d_url'];?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5 ><?php echo $rows['d_name'];?></h5>
              <p ><?php echo $rows['specialization'];?></p>
                 <p ><?php echo $rows['gender'];?></p>
                 <p >Salary:<?php echo $rows['salary'];?></p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $rows['d_email'];?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted"><?php echo $rows['contact'];?></p>
                  </div>
                </div>
                <h6>Detail</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Qualifications</h6>
                    <p class="text-muted"><?php echo $rows['qualification'];?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Duty Time</h6>
                    <p class="text-muted"><?php echo $rows['duty'];?></p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
     		}
     	}
     }
	?>
</body>
</html>