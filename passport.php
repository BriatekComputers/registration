<?php
    require "connect/connection.php";
    if (isset($_POST['passport'])) {

       $hoto = $_POST['file'];
       $datp = date("Y-m-d");
       $regn = $_POST['regno'];
       $qrt = "INSERT INTO passport_tbl(passp_name,datep) VALUES ('$hoto','$datp')";

       $result = mysql_query($qrt) or die(mysql_error());
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>mautech.edu.ng</title>

    <!-- Bootstraplink -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link rel="icon" href="img/mautech.jpg">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div>

        <!-- Navigation -->
        <nav class="navbar" role="navigation" style="background-color: #930;">
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
                    <li><a href="#"><span class="glyphicon glyphicon-briefcase  " style="font-size: 10px;"></span> About</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-th" style="font-size: 10px;"></span> Galary</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-calendar" style="font-size: 10px;"></span> Academic Calender</a></li>
                </ul>
            </div>



            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" style="background-color: #930; margin-top: -50px;border-radius: 0px 0px 10px 10px;">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <label class="label" style="color:#fff;font-size: 15px;">Welcome Sadeeq</label>
                                <span class="input-group-btn">
                                <button class="btn btn-circle" style="background-color: #ddd" type="button">
                                    <i class="glyphicon glyphicon-log-out"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php" ><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="biodata.php"><i class="fa fa-edit fa-fw"></i> Bio-Data</a>
                        </li>
                        <li>
                            <a href="passport.php"  class="active"><i class="fa fa-picture-o fa-fw"></i> Upload Passport</a>
                        </li>
                        <li>
                            <a href="course.php"><i class="fa fa-edit fa-fw"></i> Courses Registration Form</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Approved Courses<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="first.php">First Semester</a>
                                </li>
                                <li>
                                    <a href="second.php">Second Semester</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Printing and Logout<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.php">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.php">Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6 col-xs-12 clearfix">
            <div class="panel panel-default" style="margin-top: 10px;">
                <div class="panel-heading" style="background-color:#930;height: 3em">
                
                    <h3 class="panel-title txtlogo" style="font-size: 15px;color: #fff;">UPLOAD PASSPORT
                    <span class="glyphicon glyphicon-cloud-upload" style="margin-top:-5px;font-size: 26px;float: right;"></span>
                    </h3>
                </div>
        <div class="panel-body">
            <form role="form" method="post" action="course.php">
                
                    <div class="row">
                           <!--passport-->
                    <div class="col-md-4">
                                <div class="passport">
                                    <img src="img/psp.png">
                                </div><br>
                                
                                <div class="form-group input-group">
                                <div class="upload">
                                <input type="file"  name="file"></div>
                                </div>
                           </div>
                        </div>
                     





                                <!-- Change this to a button or input when using this as a form -->
                                <input type="Submit" name="passport" value="Submit" class="btn btn-md btn-success"/><span class="glyphicon glyphicon-log-in" style="color: #fff;font-size: 14px;"></span>
                                <input type="reset"  value ="reset" class="btn btn-md btn-danger"/><span class="glyphicon glyphicon-trash" style="color: #fff;font-size: 14px;"></span>
                          
                        </form>
                    </div>
                </div>
            </div>
<!---scripft -->
 <!-- jQuery -->
   

    <script>
    $(function(){
        $('.nav-tabs a:first').tab('show');
    });
</script>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>


</body>

</html>
