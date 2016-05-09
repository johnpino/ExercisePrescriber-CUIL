<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Walking With Crutches</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row blue-block">
                <div class="col-sm-12 col-xs-12 col-lg-3 col-md-3 text-title vcenter">
                    <img src="img/introduction-a.png" class="center-block">
                </div><!--
				--><div class="col-sm-12 col-xs-12 col-md-9 col-lg-9 vcenter">
                    <p style="margin:  25px 0;" class="title-content">Walking WITH crutches</p>
                </div>
            </div>
            <?php
				include("connection.php");
				$conn = Connection();
						
				$sql_patient = "SELECT al, wbs FROM patients WHERE id = " . $_GET['id'];
				$query_patient = mysqli_query($conn, $sql_patient);
				$row = mysqli_fetch_array($query_patient, MYSQLI_NUM);
				
				$al = $row[0];
				$wbs = $row[1];
				
				$sql_information = "SELECT `" . $wbs . "` FROM info_walking";
				$query_information = mysqli_query($conn, $sql_information);
				$row = mysqli_fetch_array($query_information, MYSQLI_NUM);
						
				$info = $row[0];
				
				echo str_replace("AFFECTED_LEG",$al,$info);
			?>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
