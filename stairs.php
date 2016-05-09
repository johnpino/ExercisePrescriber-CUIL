<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Using Crutches For The Stairs</title>
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
                    <p style="margin:  25px 0;" class="title-content">Using Crutches For The Stairs</p>
                </div>
            </div>
            <div class="row white-block">
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                    <p>Only use your crutches in the way shown if you feel confident to do so. Shuffling up and down the stairs on your bottom is a slow, less graceful way of using your stairs but it is the safest way. This is especially true if you have been told not to put any weight through the affected leg.</p>
                    <p>Place your crutches and feet in the middle of the step... not near the edges of the step.</p>
                    <p>If a bannister is available try to use it. It provides stability but do not rely on it to put all your pressure through it. Have one hand on the handrail and a crutch in the other. You can also carry the extra crutch in this hand as shown:</p>
                    <img src="http://placehold.it/500x500" class="img-responsive center-block" />
                    <br />
                    <div class="row wbs red-alert">
                        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 vcenter">
                            <span class="glyphicon glyphicon-bullhorn" style="font-size: 80px; margin-right: 10px;"></span> 
                        </div><!--
						--><div class="col-sm-12 col-xs-12 col-md-8 col-lg-8 vcenter">
                            <p>Always remember how much weight you are allowed to place through the
affected leg when going up and down the stairs.<br></p>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="clear-columns clearfix visible-sm-block visible-md-block visible-lg-block visible-xs-block"></div>
				
                <?php
					include("connection.php");
					$conn = Connection();
							
					$sql_patient = "SELECT wbs, hs FROM patients WHERE id = " . $_GET['id'];
					$query_patient = mysqli_query($conn, $sql_patient);
					$row = mysqli_fetch_array($query_patient, MYSQLI_NUM);
					
					$wbs = $row[0];
					$hs = $row[1];
					
					if($hs != "No Handrails"){
						$sql_information = "SELECT `" . $wbs . "` FROM info_stairs";
					}else{
						$sql_information = "SELECT `" . $wbs . " " . $hs . "` FROM info_stairs";
					}
					
					$query_information = mysqli_query($conn, $sql_information);
					$row = mysqli_fetch_array($query_information, MYSQLI_NUM);
							
					$info = $row[0];
					
					echo $info;
				?>
				
                <div class="clear-columns clearfix visible-sm-block visible-md-block visible-lg-block visible-xs-block"></div>
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
