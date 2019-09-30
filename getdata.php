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

    <div>
        <nav class="navbar-nav navbar-light bg-light">
            <a href="" class="navbar-brand m-2">Placement Portal GECG28 - CE-IT Department</a>
        </nav>
    </div>

<?php
if(isset($_POST['submit'])){

    $cmpname = $_POST['cmp_name'];

    $db_host = '127.0.0.1';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'placement2020';

    $mysqli = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if(!$mysqli) {
        die("Unable to Establish a connection " . mysqli_error($mysqli));
    }

?>

    <table class="table">
        <tr>
          <td>No.</td>
          <td>En No</td>
        </tr>

<?php

    $query = "SELECT * FROM $cmpname ORDER BY En_no ASC";
    $run_query = mysqli_query($mysqli, $query);
    $i = 1;
    while ($row = mysqli_fetch_assoc($run_query)){
        $en_no = $row['En_no'];

        $black_query = "SELECT * FROM blacklist";
        $black_run = mysqli_query($mysqli, $black_query);

        if(mysqli_num_rows($black_run) == 0){
            echo "<tr><td>" . $i . "</td><td>";
						// code...
						echo $row['En_no'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['Email'] . "</td><td>";
						echo "</td></tr>";
            $i++;
        }
    }
?>
    </table>
<?php
}else{
?>

    <div class="container-fluid">
        <div class="well">
            <h4>Get Registered Students Details</h4>
        </div>
        <div class="well ml-5">
            <div class="form-group">
                <form class="" action="" method="post">
                    <div class="input-group">
                        <label for="cmp_name">Company Name : </label>
                        <select class="custom-select" name="cmp_name">
                            <option value="" disabled selected>Select Company Name </option>
                            <option value="aimdek">AIMDek</option>
                            <option value="cybercom">Cybercom Creation</option>
                            <option value="maruti">Maruti TechLabs Pvt. Ltd.</option>
                            <option value="silvertouch">Silver Touch</option>
                            <option value="solute">Solute TechnoLabs</option>
                            <option value="tatvasoft">TatvaSoft</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Get Details</button>
                </form>
            </div>
        </div>
    </div>

<?php
}
 ?>

</body>
</html>
