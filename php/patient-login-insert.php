<html>
  <head>
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
    	html { 
  font-family: century-gothic, sans-serif;
  font-weight: 400;
  font-style: normal;
}

body{
  
  height: 100vh;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: #D3D3D3;
}

.container{
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  margin: 20px auto;
}

.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
  margin-bottom: 10px;
}

.container .title::before{
  content: '';
  position: absolute;
  margin-top: 5px;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  background: #2e8b57;
}
.container form .account-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

form .account-details .form-group{
  margin-bottom: 15px;
  width: 100%;
  margin-right: 20px;
}
.account-details .form-group .form-title{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.account-details .form-group input{
  height: 45px;
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding-left: 15px;
  font-size: 16px;
  border-bottom-width: 1px;
  transition: all 0.3s ease;
}

.container form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

form .user-details .form-group{
  width: calc(100% / 3 - 25px);
  margin-right: 20px;
}

.user-details .form-group .form-title{
  font-weight: 500;
  margin-bottom: 5px;
}

.user-details .form-group input{
  height: 45px;
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding-left: 15px;
  font-size: 16px;
  border-bottom-width: 1px;
  transition: all 0.3s ease;
  margin-bottom: 10px;
}

.form-group input:focus,
.form-group input:valid{
  border-color: #2e8b57;
}

form .form-radio .form-title{
  font-weight: 500;
}

form .form-radio .category{
  display: flex;
  width: 100%;
  margin: 14px 0;
  justify-content: flex-start;
}
.form-radio .category label{
  display: flex;
  align-items: center;
  margin-right: 10px;
}
.form-radio .category .radio{
  height: 10px;
  width: 10px;
  background: #d9d9d9;
  border-radius: 50%;
  margin-right: 10px;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}

#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two{
  border-color: #d9d9d9;
  background: #2e8b57;
}

form input[type="radio"]{
  display: none;
}

form .button{
  height: 45px;
  margin: 45px 0;
}

form .button input{
  height: 100%;
  width: 100%;
  outline: none;
  color: #fff;
  border: none;
  font-size: 18px;
  font-weight: 500;
  border-radius: 5px;
  letter-spacing: 1px;
  background: #2e8b57;
}

form .button input::hover{
  background: #3cb371;
}

@media(max-width: 584px){
  .container{
    max-width: 100%;
  }
  form .account-details .form-group{
    margin-bottom: 15px;
    width: 100%;
  }
  form .user-details .form-group{
    margin-bottom: 15px;
    width: 100%;
  }
  form .form-radio .category{
    width: 100%;
  }
  .container{
    max-height: 300px;
    overflow-y: scroll;
  }
}
    </style>
  </head>
  
        <body style="background: url(../images/service-bg.png);">
       <?php
       session_start();
     $id= $_SESSION['id'];
       echo $id;
       ?>


      <div class="container" style="margin-top:20vh;">
      <div class="title">Patients Details</div>
      <form action="patient-details-insert.php" method="post" enctype="multipart/form-data">
        
        <div class="account-details">
          <div class="form-group">
            <label class="form-title" for="">Problem</label>
            <input type="text" name="problem" placeholder="eg.allergy" required>
          </div>
          <div class="form-group">
            <label class="form-title" for="">Address</label>
            <input type="text" name="address" placeholder="eg.sector 18 delhi" required>
          </div>
          <div class="form-group">
            <label class="form-title" for="">Contact</label>
            <input type="text" name="contact"placeholder="enter phone no." required>
          </div>
        </div>
        
        <div class="user-details">
          <div class="form-group">
            <label class="form-title" for="">Height</label>
            <input type="text" name="height" placeholder="enter the height" required>
          </div>
          <div class="form-group">
            <label class="form-title" for="">Weight</label>
            <input type="text" name="weight" placeholder="enter the wight" required>
          </div>
          <div class="form-group">
            <label class="form-title" for="">Age</label>
            <input type="text" name="age" placeholder="enter the age" required>
          </div>
        </div>
        
        <div class="form-radio">
          <input value="male" type="radio" name="gender" id="dot-1">
          <input value="female" type="radio" name="gender" id="dot-2">
          <label class="form-title">Gender</label>
          <div class="category">
            <label for="dot-1">
              <span class="radio one"></span>
              <span >Male</span>
            </label>
            <label for="dot-2">
              <span class="radio two"></span>
              <span>Female</span>
            </label>
          </div>
          <label>Upload image</label>
          <input type="file" name="image">
        </div>
        <div class="button">
          <input type="submit" name="submit" value="SAVE">
        </div>
      </form>

    </div>
   <div style="width: 100vw;margin-top:5vh;margin-bottom:5vh;text-align: center;">
	<a class="btn btn-light" href="patient-see-profile.php" style="letter-spacing: 5px;color:black;text-decoration:none;background-color:white;border-radius:10px;padding: 20px;padding-left:50px;padding-right:50px;font-weight:bolder;box-shadow: 0px 0px 10px black;">SEE PROFILE</a>
</div>
  </body>

</html>