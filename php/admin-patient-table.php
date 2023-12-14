<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		/* Global */
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

html, body {
  min-height: 100%;
}

body {
  background: #80DEEA;
  background: -moz-linear-gradient(-45deg, #80DEEA 0%, #283593 100%);
  background: -webkit-linear-gradient(-45deg, #80DEEA 0%, #283593 100%);
  background: -o-linear-gradient(-45deg, #80DEEA 0%, #283593 100%);
  background: -ms-linear-gradient(-45deg, #80DEEA 0%, #283593 100%);
  background: linear-gradient(135deg, #80DEEA 0%, #283593 100%);
  font-family: 'Open Sans', sans-serif;
  color: #FFFFFF;
}

.wrapper {
  width: 90%;
  max-width: 620px;
  margin: 20px auto;
  border-radius: 3px;
  background: rgba(255,255,255,0.1);
}

/* Intro */
.intro-box {
  width: 80%;
  max-width: 820px;
  margin: 10vh auto 40px auto;
}

.intro-box h2 {
  font-size: 2em;
  font-weight: 300;
  text-align: center;
}

/* Fields */
.fields-box {
  padding: 18px 5%;
}

.fields-box label {
  display: inline-block;
  width: 33.33%;
  padding: 6px 12px;
}

.fields-box label span {
  display: block;
  width: 100%;
  margin-bottom: 4px;
  font-size: .8em;
  color: #BBDEFB;
}

.fields-box label input {
  width: 100%;
  padding: 8px;
  color: #29B6F6;
  background: #FFFFFF;
  background: rgba(255,255,255,0.9); 
  border: none;
  outline: none;
  border-radius: 3px;
}

@media only screen and (max-width: 520px){
  .fields-box label {
    width: 100%;
  }
}

/* Table */
.table-box {
  padding: 10px 5%;
  background: rgba(255,255,255,0.1);
}

table, tr, td {
  border: none;
  border-collapse: collapse;
}

.table-box table, 
.table-box table tr {
  width: 100%;
  max-width: 100%;
  padding: 12px;
}

.table-box table tr {
  border-bottom: 1px solid rgba(255,255,255,0.1);
}

.table-box table tr:last-child {
  border: none;
}

.table-box table tr td {
  padding: 10px;
  text-align: left;
  outline: none;
}


/* Buttons */
.buttons-box {
  position: fixed;
  width: 54px;
  right: 14px;
  bottom: 18px;
  z-index: 1;
}

.buttons-box button {
  display: inline-block;
  width: 54px;
  height: 54px;
  margin-top: 14px;
  font-size: .8em;
  font-weight: 700;
  color: #2196F3;
  background: #FFFFFF;
  border: none;
  outline: none;
  border-radius: 100%;
  text-align: center;
  box-shadow: 
    0 5px 10px rgba(0,0,0,0.25), 
    0 4px 8px rgba(0,0,0,0.25);
  cursor: pointer;
  transition: ease .2s;
}

.buttons-box button:hover {
  background: #EDE7F6;
  box-shadow: 
    0 10px 20px rgba(0,0,0,0.1), 
    0 8px 16px rgba(0,0,0,0.1);
}

/* Print version */
@media print {
  @page {
    margin: .5cm;
  }

  body {
    border: 6px solid #DDDDDD;
  }

  tr {
    border-bottom: 1px solid #DDDDDD;
  }
  
  .intro-box,
  .fields-box,
  .buttons-box {
    display: none;
  }
}
	</style>
</head>
<body style="background: url(../images/service-bg.png);">

<?php

session_start();
$id= $_SESSION['id'];
echo $_SESSION['name'];

include 'navbar.php';


?>

<div class="intro-box" style="margin-top: 30vh;">
  <h2 style="color:white;">Pateint Details</h2>
</div>

<div class="wrapper" style="width:50vw">
 
  <!-- Fields -->
 

  <!-- Table -->
  <!-- Table -->
<div class="table-box" style="width:50vw">
    <table>
        <thead>
            <th style="color:white;letter-spacing: 2px;">Name</th>
            <th style="color:white;letter-spacing: 2px;">Email</th>
            <th style="color:white;letter-spacing: 2px;">Contact</th>
            <th style="color:white;letter-spacing: 2px;">Address</th>
            <th style="color:white;letter-spacing: 2px;padding-left:12px;">Action</th>
        </thead>
        <tbody>

            <?php
            include 'database.php';
            $sql = "select * from patient";

            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($rows = mysqli_fetch_assoc($result)) {
            ?>

                        <tr>
                            <td style="color:white;letter-spacing: 2px;"><?php echo $rows['p_name']; ?></td>
                            <td style="color:white;letter-spacing: 2px;"><?php echo $rows['p_email']; ?></td>
                            <td style="color:white;letter-spacing: 2px;"><?php echo $rows['contact']; ?></td>
                            <td style="color:white;letter-spacing: 2px;"><?php echo $rows['address']; ?></td>
                            <td>
                                <a class="btn btn-light" style="padding:7px" href="delete-patient.php?id=<?php echo $rows['p_id'];?>">Delete</a>
                            </td>
                        </tr>

            <?php
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div>

  <!-- Buttons -->
  <div class="buttons-box">
    <button onclick="download();">Save</button>
    <button onclick="printTable();">Print</button>
  </div>

</div>


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">


</body>
</html>