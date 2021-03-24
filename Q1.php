<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	
    
    // start time
    
        
    $name = $_COOKIE["name"];
    $a1 = $_POST['a1'];
    
    $t2 = (time() + 1000);
    echo($t2 . "<br>");
    $at1=$_POST['submit'];
    $str="INSERT INTO answer "."(name,a1,at1) "."VALUES ('$name','$a1','$at1')";
    $result=mysqli_query($con,$str);
    header("location:Q2.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    /*function stt(){
      date_default_timezone_set('Asia/Kolkata');
      $time= time();
      $atime = date('h:i:s A',$time);
      echo $atime;}

      function et(){
        date_default_timezone_set('Asia/Kolkata');
        $time1= time()+10;
        $atime1 = date('h:i:s A',$time1);
        echo $atime1;
        $at1= $atime1-$atime;
        echo($at1);}*/
      ?>

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
    <script>
      var formInitializationTime = new Date();
      function submitDuration() {
	    formInitializationTime = new Date() - formInitializationTime;
	    console.log(formInitializationTime);
	}
      <?php 
      echo "Hello";
      echo("<script>document.write(at1);</script>");
      ?>
    </script>
  </head>
  <body >
    <1?php stt();?>
    <div class="header">
      <h3>Dyslexia Data Colletion</h3>
      <h3>Capstone Project At Vellore Institute of Technology</h3>
    </div>
    
    <section class="login first grey">
			<div class="container">
      <h1>Question 1</h1>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" action="Q1.php" enctype="multipart/form-data">
              <div class="form-group">
                <input type="radio" name="a1" value="Male" class="form-control:focus" required />Male <br>
                <input type="radio" name="a1" value="Male" class="form-control:focus" required />Male <br>
                <input type="radio" name="a1" value="Male" class="form-control:focus" required />Male <br>
                <input type="radio" name="a1" value="Male" class="form-control:focus" required />Male 
              </div>
              <div id="home" class="flex-center flex-column">
                <button class="btn btn-primary btn-block" id="submit" name="submit" onclick="submitDuration()">Next</button>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>
    <1?php et(); ?>
  </body>
</html>
