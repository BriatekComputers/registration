<?php
    require "connect/connection.php";
    if(isset($_POST['next'])) {
        $regn = mysql_real_escape_string($_POST['regno']);
        $frm = mysql_real_escape_string($_POST['formno']);
        $fsname = mysql_real_escape_string($_POST['fname']);
        $sdname = mysql_real_escape_string($_POST['lname']);
        $oname = mysql_real_escape_string($_POST['o_name']);
        $status = mysql_real_escape_string($_POST['mstatus']);
        $gend = mysql_real_escape_string($_POST['gender']);
        $dob = mysql_real_escape_string($_POST['dob']);
        $relg = mysql_real_escape_string($_POST['religion']);
        $phn = mysql_real_escape_string($_POST['phone']);
        $mail = mysql_real_escape_string($_POST['email']);
        $natn = mysql_real_escape_string($_POST['nationality']);
        $st = mysql_real_escape_string($_POST['state']);
        $lcl = mysql_real_escape_string($_POST['local']);
        $addr = mysql_real_escape_string($_POST['address']);
        $caddr = mysql_real_escape_string($_POST['c_address']);
        $nokf = mysql_real_escape_string($_POST['nok_fname']);
        $nokl = mysql_real_escape_string($_POST['nok_lname']);
        $nokO = mysql_real_escape_string($_POST['nok_other']);
        $nokE = mysql_real_escape_string($_POST['nok_email']);
        $nokP = mysql_real_escape_string($_POST['nok_phone']);
        $reltshp = mysql_real_escape_string($_POST['rel']);
        $date = date("Y-m-d");
        /**********>>>>>>query>>>>>>>***/
        $qr = "INSERT INTO biodata_tbl(std_regNum, std_fname, std_lname, std_othername, std_sex, std_nationality, std_state, std_lga, std_address, std_c_address, std_phoneNo, std_email, std_dob, std_mstatus, std_religion, nok_fname, nok_lname, nok_others, nok_phone, nok_email, relationshp, regdate) VALUES ('$regn','$fsname','$sdname','$oname','$gend','$natn','$st','$lcl','$addr','$caddr','$phn','$mail','$dob','$status','$relg','$nokf','$nokl','$nokO','$nokE','$nokP','$reltshp','$date')";
        $xecute = @mysql_query($qr) or die(mysql_error());
        
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
    

    <!-- MetisMenu CSS -->
    

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link rel="icon" href="img/mautech.jpg">

    <!-- Morris Charts CSS -->
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="container">


        <!-- Navigation -->
             <nav class="navbar" role="navigation">
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
                <div class="sidebar-nav navbar-collapse" style="background-color:#930; margin-top: -50px;border-radius: 0px 0px 10px 10px;">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <label class="label" style="color:#fff;font-size: 15px;">Welcome Sadeeq</label>
                                    <span class="input-group-btn">
                                        <button class="btn btn-circle" style="background-color: #fff" type="button">
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
                            <a href="biodata.php" class="active"><i class="fa fa-edit fa-fw"></i> Bio-Data</a>
                        </li>
                        <li>
                            <a href="passport.php"  ><i class="fa fa-picture-o fa-fw"></i> Upload Passport</a>
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
        <div class="col-md-offset-2 col-md-10 col-xs-12">
            <div class="login-panel panel panel-default" style="margin-top: 10px;">
                <div class="panel-heading" style="background-color:#930;height: 3em">
                    <h3 class="panel-title txtlogo" style="font-size: 15px;">PERSONAL DATA
                    <span class="glyphicon glyphicon-user" style="float: right;margin:0px 10px;font-size: 36px;">
                    </span></h3>
                </div>
        <div class="panel-body">
            <form role="form" method="post" action="passport.php">
                
                    <div class="row">
                        <div class="col-md-4">
                            <label class="label" style="color:#aaa;font-size: 15px; ">Registration No:
                            <span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span>
                            </label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-list-alt" style="color:#930;"></span></span>
                                <input type="text" class="form-control" name="regno" placeholder="Reg Number" required>
                                </div>
                            </div>
                        <div class="col-md-4">
                            <label class="label" style="color:#aaa;font-size: 15px; ">Form No:
                            <span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span>
                            </label>
                            <div class="form-group input-group">
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-list-alt" style="color: #930;"></span>
                           </span>
                           <input type="text" class="form-control" name="formno" placeholder="Form Number" required>
                            </div>
                        </div>

                        </div>


        
                        <div class="row"><!--nested row in row1-->
                            
                            <div class="col-md-4">
                                 <label class="label" style="color:#aaa;font-size: 15px; ">First Name:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                             <label class="label" style="color:#aaa;font-size: 15px; ">Last Name:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                                </div>
                            </div>
                            
                                <div class="col-md-4">
                                 <label class="label" style="color:#aaa;font-size: 15px; ">Other Name:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>

                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="o_name" placeholder="Other Name">
                                </div>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col-md-4">
                             <label class="label" style="color:#aaa;font-size: 15px; ">Marital Status:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="fa fa-gittip" style="color: #930;"></span></span>
                                   <div class="form-group">
                                            <select class="form-control" name="mstatus" >
                                                <option>---select marital status</option>
                                                <option value="single">Single</option>
                                                <option value="Married">Married</option>
                                                <option class="divorce">Divorce</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            
                               <div class="col-md-4">
                             <label class="label" style="color:#aaa;font-size: 15px; ">Gender:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="fa fa-male" style="color: #930;"></span></span>
                                   <div class="form-group">
                                            <select class="form-control" name="gender" >
                                                <option>---select gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label class="label" style="color:#aaa;font-size: 15px;">Date of Birth:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" style="color: #930;"></span></span>
                                   <input type="date" class="form-control" name="dob">
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-4">
                             <label class="label" style="color:#aaa;font-size: 15px; ">Religion:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="fa fa-th" style="color: #930;"></span></span>
                                   <div class="form-group">
                                            <select class="form-control" name="religion" >
                                                <option>---select Religion</option>
                                                <option value="islam">Islam</option>
                                                <option value="christian">Christian</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label class="label" style="color:#aaa;font-size: 15px; ">Phone Number:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-phone" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="phone" placeholder="e.g o8xxxxxxxxx">
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label class="label" style="color:#aaa;font-size: 15px; ">Email:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span  style="color: #930;">@</span></span>
                                <input type="text" class="form-control" name="email" placeholder="e.g user@briatek.com">
                                </div>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                             <label class="label" style="color:#aaa;font-size: 15px; ">Nationality:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="fa fa-th" style="color: #930;"></span></span>
                                   <div class="form-group">
                                            <select class="form-control" name="nationality" >
                                                <option>---select your Nationality</option>
                                                <option value="Nigerian">Nigerian</option>
                                                <option value="Non-Nigerian">Non-Nigerian</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                             <label class="label" style="color:#aaa;font-size: 15px; ">State:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="fa fa-bank" style="color: #930;"></span></span>
                                   <div class="form-group">
                                            <select class="form-control" name="state" >
                                                <option>---select your State</option>
                                                <option value="Gombe">Gombe</option>
                                                <option value="Abuja">Abuja</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                             <label class="label" style="color:#aaa;font-size: 15px; ">L.G.A:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="fa fa-bank" style="color: #930;"></span></span>
                                   <div class="form-group">
                                            <select class="form-control" name="local" >
                                                <option>---select L.G.A</option>
                                                <option value="Gombe">Gombe</option>
                                                <option value="Abuja">Abuja</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                <label class="label" style="color:#aaa;font-size: 15px; ">Address:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="fa fa-road" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label class="label" style="color:#aaa;font-size: 15px; ">Contact:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="fa fa-building" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="c_address" placeholder="contact Address">
                                </div>
                            </div>
                            
                            </div>  
                    <div class="login-panel panel panel-default" style="margin-top: 0px;">
                    <div class="panel-heading" style="background-color:#930;height: 3em">
                        <h3 class="panel-title" style="font-size: 15px;">NEXT OF KIN DETAILS<span class="fa fa-male" style="float: right;margin:0px 10px;font-size: 36px;"></span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                <div class="col-md-4">
                                <label class="label" style="color:#aaa;font-size: 15px; ">First Name:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="nok_fname" placeholder="first name">
                                </div>
                            </div>
                            <div class="col-md-4">
                             <label class="label" style="color:#aaa;font-size: 15px; ">Last Name:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="nok_lname" placeholder="last name">
                                </div>
                            </div>
                            <div class="col-md-4">
                             <label class="label" style="color:#aaa;font-size: 15px; ">Other Name:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-user" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="nok_other" placeholder="other name">
                                </div>
                            </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-4">
                                 <label class="label" style="color:#aaa;font-size: 15px; ">Relationship:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="fa fa-male" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="rel" placeholder="Relationship">
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label class="label" style="color:#aaa;font-size: 15px; ">Email:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span  style="color: #930;">@</span></span>
                                   <input type="text" class="form-control" name="nok_email" placeholder="e.g user@briatek.com">
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label class="label" style="color:#aaa;font-size: 15px; ">Phone Number:<span class="glyphicon glyphicon-asterisk" style="color: red;font-size: 10px;"></span></label>
                                <div class="form-group input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-phone" style="color: #930;"></span></span>
                                   <input type="text" class="form-control" name="nok_phone" placeholder="e.g 08xxxxxxxxxx">
                                </div>
                            </div>
                            </div>  
                



                     </div>
                    </div> 





                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="next" value="Next" class="btn btn-success"/><span class="glyphicon glyphicon-log-in" style="color: #fff;font-size: 14px;"></span>
                                <input type="submit" value="Clear" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-trash" style="color: #fff;font-size: 14px;"></span>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

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
