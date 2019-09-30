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

	$db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'placement2020';

    $mysqli = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if(!$mysqli) {
        die("Unable to Establish a connection " . mysqli_error($conn));
    }

    $cmp_nam = $_POST['comapny_name'];
	$tb_nam = $_POST['table_name'];
	$en_no = $_POST['en_no'];

	$black_query = "SELECT * FROM blacklist WHERE en_no = $en_no";

	$list_query = mysqli_query($mysqli, $black_query);

	while($row = mysqli_fetch_assoc($list_query)){
		$count = $row['id'];
		echo "<script type='text/javascript'>alert('Black listed <br /> $count ')</script>";


?>

	<script type='text/javascript'>
		alert('Sorry You are Black Listed');
		window.location.href = "index2.php?S37KoHcn5WJIR6OXKFNo1Q=BL52CD";
	</script>

<?php

		}

		$query = "INSERT INTO $tb_nam (En_no) VALUES ('{$en_no}')";

			$run_query = mysqli_query($mysqli, $query);

			if(!$run_query){
	        	echo "<script type='text/javascript'>alert('Registration Unsuccessfull <br /> " . mysqli_error($mysqli) . " <br />Please Try Again...');</script>";
	    	}else{
	 	    	echo "<script type='text/javascript'>alert('Registration Successfull');</script>";
?>

    <script type="text/javascript">
        window.location.href="index.php";
    </script>

<?php

	}
	
}

if(isset($_GET['S37KoHcn5WJIR6OXKFNo1Q'])){

        $id = $_GET['S37KoHcn5WJIR6OXKFNo1Q'];
        
        switch($id){
            case "G2SUY":
                $cmp_nam = "Maruti Techlabs Pvt. Ltd. ";   
                $tb_nam = "maruti";
                break;
            case "G3SUY":
                $cmp_nam = "AIMDek Technologies Pvt Ltd ";	
                $tb_nam = "aimdek";
                break;
            case "E8DBo":
                $cmp_nam = "Velox Softech LLP";				
                $tb_nam = "veloxsoft";
                break;
            case "E8DBp";
                $cmp_nam = "eSparkBiz Technologies Pvt. Ltd";	
                $tb_nam = "esparkbiz";
                break;
            case "jTRyGS07":
                $cmp_nam = "Solute TechnoLabs LLP";			
                $tb_nam = "solutetech";
                break;
            case "jTRyGS08":
                $cmp_nam = "Change accordingly...";			
                $tb_nam = "trycatch";
                break;
            default:
                $cmp_nam = "";
        }
    }

?>
<div>
	<nav class="navbar-nav navbar-light bg-light">
		<a href="" class="navbar-brand m-2">Placement Portal GECG28 - CE-IT Department</a>
	</nav>
	<br />

	<div class="container">
		<div class="well">
			<h4 class="h4"><?php echo $cmp_nam; ?> </h4>
		</div>

		<hr>
		<div class="text-justified">
			<h5 class="text-muted">If you are interested in to getting a campus Placement from <?php echo $cmp_nam; ?>, then Enter your Enrollment No in below form and submit it...</h5>
		</div>
		<br /><br />

		<div class="well ml-5">
			<div class="form-group">
				<form action="" method="post">
					<div class="input-group">
						<label for="std_enno">Enrollment No: </label>&nbsp;&nbsp;
						<input type="text" name="en_no" class="" id="std_enno" pattern="\d{12}" >
					</div>
					<input type="hidden" name="comapny_name" value="<?php echo $cmp_nam; ?>">
					<input type="hidden" name="table_name" value="<?php echo $tb_nam; ?>">
					<br />
					<button type="submit" name="register" class="btn btn-primary">Apply for It..</button>
				</form>
			</div>
			<div class="form-group">
				<h4 class="h4">Register here before 2/7/2019 4:00 PM</h4>
			</div>
		</div>
	</div>

</div>
<!-- 
	<pre>
ADMIN PANEL  
Hiii, NAME                                                                                  LogOUT

(navbar horizontal)
Manage Companies
View Enrolls - Company Wise
Technology changes		

<b>
(pages)
MANAGE_COMPANIES</b>    	d
		ADD Comapny (only name and basic details)
		Change Status (coming, active, close)
		Remove Company


<b>(View Enrolls - Company Wise)</b>
		Select Company and view Enrolls
		Donwload Enrolls List with its full details (comapny wise)

<b>(Technology Changes)</b>
		Analyse the technology flows of students


	</pre> -->
</body>
</html>