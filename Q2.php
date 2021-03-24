<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	
    //$_SESSION['name']=$name;
    $name = $_COOKIE["name"];
		$a2 = $_POST['a2'];
    $at2=$_POST['at2'];
	  $str="INSERT INTO an2 "."(name,a2,at2) "."VALUES ('$name','$a2','$at2')";
    $result=mysqli_query($con,$str);
    echo "this is name",$name;
    header("location:Q1.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quiz</title>
    <!link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/Ques.css" />
    <link rel="stylesheet" href="css/form.css" />
    <style type="text/css">
      html, body { width: 100%; height: 100%; overflow: hidden; background-color:rgba(55, 0, 255, 0.397);}
    </style>
  </head>
  <body>
  <?php
print_r($_SESSION);
?>
    <div class="header">
      <h3>Dyslexia Data Colletion</h3>
      <h3>Capstone Project At Vellore Institute of Technology</h3>
    </div>
    
    <section class="login first grey">
			<div class="container">
      <h1>Question 2</h1>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" action="Q2.php" enctype="multipart/form-data">
              <div class="form-group">
                <input type="radio" name="a2" value="Male" class="form-control:focus" required />Male <br>
                <input type="radio" name="a2" value="FeMale" class="form-control:focus" required />Male <br>
                <input type="radio" name="a2" value="Male" class="form-control:focus" required />Male <br>
                <input type="radio" name="a2" value="Male" class="form-control:focus" required />Male 
              </div>
              <div id="home" class="flex-center flex-column">
                <!a class="btn" href="Q2.php" name="submit">Next</a>
                <button class="btn btn-primary btn-block" name="submit">Register</button>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>
  </body>
</html>
