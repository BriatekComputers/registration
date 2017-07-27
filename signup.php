<?php
    //connection
require"connect/connection.php";
 require "fxns/userfn.php";
if(isset($_POST['Signup'])){
    $formn = mysql_real_escape_string($_POST['formno']);
    $regn = mysql_real_escape_string($_POST['regno']);
    $pssd = mysql_real_escape_string($_POST['psw']);
    $cos = mysql_real_escape_string($_POST['cc']);
    $dpt = mysql_real_escape_string($_POST['depart']);
    $psd2 = mysql_real_escape_string($_POST['cpsw']);
    $date = date("Y-m-d");
    if (validatePassword($pssd,$psd2) == "yes"){

        $qr = "INSERT INTO regnum_tbl (stdformno, stdRegNum, stdpassword, stdcourse, department, dateofreg) 
            VALUES ('$formn','$regn','$pssd','$cos','$dpt','$date')";
        $result = @mysql_query($qr) or die(mysql_error());
        if(!$result){
            echo "not xcuted";
        }
    }else{echo "oops";}
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
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	
	
</head>
<body>
<!-- Navigation -->
<div class="container">
<div class="row">
     <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#930;">
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
                <ul class="nav nav-tabs nav-default" style="margin-top: 25px;">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size: 10px;"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-briefcase" style="font-size: 10px;"></span> About</a></li>
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
            <div class="col-md-5 col-md-offset-3 col-xs-11">
                <div class="login-panel panel panel-default" style="margin-top: 90px;">
                    <div class="panel-heading" style="background-color:#930;;height: 4em;">
                        <h3 class="panel-title" style="font-size: 24px;color: #fff;">REGISTRATION FORM <span class="glyphicon glyphicon-pencil" style="float: right;margin-right: 20px;"></span></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login.php">
                            
                                <label class="label" style="color:#aaa;font-size: 15px; ">Form No:</label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-info-sign" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="formno" placeholder="Form number">
                                </div>
                                <label class="label" style="color:#aaa;font-size: 15px; ">Reg No:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color: #930;"></span></span>
                                    <input type="text" class="form-control" name="regno" placeholder="Registration number">
                                </div>
                                <label class="label" style="color:#aaa;font-size: 15px; ">Department:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-education" style="color: #930;"></span></span>
                                    <input type="text" class="form-control" name="depart" placeholder="Department">
                                </div>
                                <label class="label" style="color:#aaa;font-size: 15px; ">Course of Study:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-book" style="color: #930;"></span></span>
                                    <input type="text" class="form-control" name="cc" placeholder="Course of Study">
                                </div>
                                <label class="label" style="color:#aaa;font-size: 15px; ">Password:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" style="color: #930;"></span></span>
                                    <input type="password" class="form-control" name="psw" placeholder="Password">
                                </div>
                                <label class="label" style="color:#aaa;font-size: 15px; ">Confirm Password:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-eye-open" style="color: #930;"></span></span>
                                    <input type="password" class="form-control" name="cpsw" placeholder="Confirm Password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="Signup" value="Sign up"  class="btn btn-success">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!---scripft -->
 <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

<script>
	$(function(){
		$('.nav-tabs a:first').tab('show');
	});
</script>

</body>
</html>