<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Introduction</title>
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
                    <p style="margin:  25px 0;" class="title-content">How to use your crutches</p>
                </div>
            </div>
            <div class="row white-block" style="background-image: url(img/introduction-b.png); background-repeat: no-repeat;">
                <div class="col-sm-12 col-xs-12 col-md-8 col-lg-8">
                    <p>Your clinician has provided you with a pair of elbow crutches and it is important that you are able to use them safely. This leaflet describes how to your crutches and assist in your recovery.</p>
                </div>
                <div class="col-sm-12 col-xs-12 main-block col-md-8 col-lg-8">
					<?php	
						include("connection.php");
						$conn = Connection();
								
						$sql_patient = "SELECT wbs FROM patients WHERE id = " . $_GET['id'];
						$query_patient = mysqli_query($conn, $sql_patient);
						$row = mysqli_fetch_array($query_patient, MYSQLI_NUM);
								
						$wbs = $row[0];
								
						$sql_information = "SELECT `" . $wbs . "` FROM info_introduction";
						$query_information = mysqli_query($conn, $sql_information);
						$row = mysqli_fetch_array($query_information, MYSQLI_NUM);
								
						$info = $row[0];
						
						switch($wbs){						
							case "Non-Weight Bearing":
							case "Touch Weight Bearing":
								$alert = "red-alert";
								break;
							case "Partial Weight Bearing":
							case "Weight Bearing As Tolerated":
								$alert = "orange-alert";
								break;
							case "Full Weight Bearing":
								$alert = "green-alert";
								break;
						}
						
						mysqli_close($conn);
					?>				
                    <div class="row wbs <?php echo $alert; ?>">
                        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 vcenter">
                            <span class="glyphicon glyphicon-exclamation-sign" style="font-size: 80px; margin-right: 10px;"></span> 
                        </div><!--
                        --><div class="col-sm-12 col-xs-12 col-md-8 col-lg-8 vcenter">
                            <p>Your clinician has determined that you are:</p>
							<?php	
								echo "<p class=\"wbs-text\">" . $wbs . "</p>";
							?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-lg-8 col-md-8"> 
                    <ul>
                        <?php	
								echo $info;
						?>
                    </ul>
                    <p class="subtitle-content">What does weight bearing status mean?</p>
                    <p>Your clinical team have to consider how much weight you can place through your affected leg. It is important to adhere to this as failure to do so could cause further injury and effect your recovery time. It is common for the weight bearing status to change over time. So please check the 'Clinician's comments' at the end of this booklet for any further instructions.</p>
                </div>
            </div>
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
