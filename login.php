<?php
    //connection..............
    require"connect/connection.php";
   
    if (isset($_POST['login'])) {
        $user = mysql_real_escape_string($_POST['user']);
        $pass = mysql_real_escape_string($_POST['psw']);
        $chk = mysql_real_escape_string($_POST['check']);
        $date = date("Y-m-d");

        /****making query***/
        $qr = "INSERT INTO login_tbl (username, password, checked, l_date) VALUES ('$user','$pass','$chk','$date')";
        $xecute = @mysql_query($qr) or die(mysql_error());
        
    }



?>

<!DOCTYPE html>
<html>
<head>
	<title>mautech.edu.ng</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!--linking boostrap-->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
	<!--linking custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<!--linking JS for boostrap-->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!--- I copied from getboostrap.com-->
    <link rel="icon" href="img/mautech.jpg">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Navigation -->
<div class="container">
<div class="row">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #aaa;">
            <div class="navbar-header">
            <div class="caption">
                <a class="navbar-brand" href="index.php"><img src="img/mautech-logo-1.png" width="10%" height="5px" style="margin-top: -10px;float: left;" class="img-responsive"><p class="txtlogo" style="display: inline;">Modibbo Adama University of Technology</p><br>
                <i class="txtlogo" style="font-family: 'magnetor';">Education for Developement.............<span class="glyphicon glyphicon-pencil" style="color: #fff;"></span></i>
                </a></div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#col">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" style="background-color: #930;" id="col">
                <ul class="nav nav-tabs nav-default" style="margin-top: 25px;color: #000">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size: 10px;"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-briefcase  " style="font-size: 10px;"></span> About</a></li>
                    <li><a href="admin.php"><span class="glyphicon glyphicon-user" style="font-size: 10px;"></span> Admin Site</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-th" style="font-size: 10px;"></span> Galary</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-calendar" style="font-size: 10px;"></span> Academic Calender</a></li>
                </ul>
            </div>
            </nav>
 <!-- /.navbar-header -->
	</div>
</div>
<!--login-->
<div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-4 col-md-offset-3 col-xs-11">
                <div class="login-panel panel panel-default" style="margin-top: 100px;">
                    <div class="panel-heading" style="background-color:#930;height: 4em">
                        <h3 class="panel-title" style="font-size: 20px;color: #fff">LOGIN
                        <span class="glyphicon glyphicon-lock" style="float: right;margin:0px 0px;font-size: 36px;color: #fff">
                        </span></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="biodata.php">
                            <fieldset>
                                <div class="form-group">
                                            
                                        </div>
                                <label class="label" style="color:#aaa;font-size: 15px; ">USERNAME:</label>
                                <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color: #930"></span></span>
                                    <input type="text" class="form-control" name="user" placeholder="Registration number">
                                </div>
                                
                               <label class="label" style="color:#aaa;font-size: 15px; ">PASSWORD:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color: #930;"></span></span>
                                    <input type="password" class="form-control" name="psw" placeholder="Password">
                                </div>
                                <input type="checkbox" class="check" name="check"/><label class="label" style="color:#aaa;font-size: 15px; ">Remember Me:</label><br><br><br><br>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="Login" name="login" href="biodata.php" class="btn btn-md btn-success"><span class="glyphicon glyphicon-log-in"></span>  Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!---scripft -->
 <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

<script>
	$(function(){
		$('.nav-tabs a:first').tab('show');
	});
</script>

</body>
</html>