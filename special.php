<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Placement Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>
<body>
  
<?php
  if(isset($_POST['register'])){

      $db_host = '127.0.0.1';
      $db_user = 'root';
      $db_pass = '';
      $db_name = 'placement2020';

      $mysqli = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

      if(!$mysqli) {
          die("Unable to Establish a connection " . mysqli_error($mysqli));
      }

      $en_no = $_POST['en_no'];
      $name = $_POST['name'];
      $email = $_POST['email'];

      $check_reg = "SELECT * FROM special WHERE En_no = '{$en_no}'";
      $get_reg = mysqli_query($mysqli, $check_reg);

      if(mysqli_num_rows($get_reg) == 0){
          $query = "INSERT INTO special (En_no, Name, Email) VALUES ('{$en_no}', '{$name}', '{$email}')";
          $run_query = mysqli_query($mysqli, $query);

          if(mysqli_affected_rows($mysqli) > 0){
              echo "<script type='text/javascript'>alert('Registration Successfull...')</script>";
?>

    <script type="text/javascript">
        window.location.href="https://gecgnceit.wordpress.com";
    </script>

<?php
          } else {
              echo "<script type='text/javascript'>alert('Registration Successfull...')</script>";
          }

      } else {
          echo "<script type='text/javascript'>alert('You are already Registered... Do not register twice...');</script>";
      }
}
?>

    <div>
        <nav class="navbar-nav navbar-light bg-light">
            <a href="" class="navbar-brand m-2">Placement Portal GECG28 - CE-IT Department</a>
        </nav>
    </div>

    <div class="container">
        <div class="well">
            <div class="col-md-10">
                <div>
                    <h1>Apexa Information System Pvt Ltd.</h1>
                    <br />
                    <h3 class="lead">3 - 6 months training with stripend</h3>
                    <h3 class="lead">After Training Package : 1.8 to 2.16 per anum</h3>
                    <h3 class="lead">Technologies : PHP, Wordpress, JAVA</h3>
                </div>
                <div>
                    <h3 class="lead">If you are interested then apply for it.</h3>
                </div>
                <br />
                <div class="well ml-5">
          				<div class="form-group">
          					<form action="" method="post">
          						<div class="input-group">
          							<label for="std_enno">Enrollment No: </label>&nbsp;&nbsp;
          							<input type="text" name="en_no" class="form-control col-md-3" id="std_enno" pattern="\d{12}" required>
          						</div>
          						<div class="input-group">
          							<label for="std_name">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          							<input type="text" name="name" class="form-control col-md-3" id="std_name" required>
          						</div>
          						<div class="input-group">
          							<label for="std_mail">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          							<input type="mail" name="email" class="form-control col-md-3" id="std_mail" required>
          						</div>
          						<br />
          						<button type="submit" name="register" class="btn btn-primary">Apply for It..</button>
          					</form>
          				</div>
          				<div class="form-group">
          					<!-- <h4 class="h4">Register here before 2/7/2019 4:00 PM</h4> -->
          				</div>
            </div>
            <br /><br />
            <div class="info col-md-9">
                <div class="lead text-justified">This is not by Placement cell its one type of off campus placement. We are giving this opportunity for those students who wants placement. Company requires skilled persons who are interested in one or more technologies on which they works. Interested students register and be ready for it.. </div>
                <div class="lead text-justified">
                  To get selected in this company you requires to be efficient in one of the technologies, and also have the gutts to do any thing.
                </div>
                <br />
                <div class="lead text-justified font-italic font-weight-bold">
                  Process : <br />
                  Company will come at our college if there are many students are interested for it.
                  <br />
                  OR <br />
                  Students have to go at their place for interview or technical round.
                </div>
            </div>
        </div>
    </div>
