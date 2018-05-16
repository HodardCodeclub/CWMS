<?php

	error_reporting( ~E_NOTICE ); // avoid notice

	require_once './dbconfig.php';

	if(isset($_POST['btnsave']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user emai
		$level = $_POST['level'];




			$stmt = $DB_con->prepare('INSERT INTO wordimages(Name,Transalation,levels) VALUES(:uname, :ujob, :ulevel)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':ulevel',$level);


			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				// header("refresh:5;index.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}

	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <title>CWMS  </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <?php include "header.php"; ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          CWMS New purchase order

          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2">


              <div class="box">

                <div class="box-body">


<a href="branches.php" class="btn btn-success">See all purchase order</a>
                  <form method="post" enctype="multipart/form-data" class="form-horizontal">



									<label class="control-label">Order type .</label>
                        <input type="radio" name="order">Purchase order
												<input type="radio" name="order">Work order<br/>
												<label class="control-label">Branch of company.</label>
												<select class="form-control" id="sel1" name="level">
													<option value="1">Select Branch</option>
													<option value="2">intermediate</option>
													<option value="3">advanced</option>

													</select>

													<label class="control-label">Project.</label>
													<select class="form-control" id="sel1" name="level">
														<option value="1">Select project</option>
														<option value="2">intermediate</option>
														<option value="3">advanced</option>

														</select>

														<label class="control-label">Vendor.</label>
														<select class="form-control" id="sel1" name="level">
															<option value="1">Select vendor</option>
															<option value="2">intermediate</option>
															<option value="3">advanced</option>

															</select>
														<h2>Delivery terms</h2>

														<label class="control-label">Packaging and forwading .</label>
																	<input type="radio" name="order">Including
																	<input type="radio" name="order">Excluding<br/>

																	<label class="control-label">Insurance.</label>
																				<input type="radio" name="order">Including
																				<input type="radio" name="order">Excluding
																				<input type="radio" name="order">None<br/>

																				<label class="control-label">Estimate date.</label></td>
																														<input class="form-control" type="date" name="user_name" placeholder="Enter PAN number" />


																														<label class="control-label">Actual date.</label></td>
																																								<input class="form-control" type="date" name="user_name" placeholder="Enter PAN number" />



<br/>
                    <button type="submit" name="btnsave" class="btn btn-info">
                          <span class="glyphicon glyphicon-save"></span> &nbsp; Create purchase order
                          </button>


                  </form>




                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
