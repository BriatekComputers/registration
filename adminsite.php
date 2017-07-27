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
    <link rel="icon" href="img/mautech.jpg">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>

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
                <a class="navbar-brand" href="index.html"><img src="img/mautech-logo-1.png" width="10%" height="5px" style="margin-top: -10px;float: left;" class="img-responsive"><p class="txtlogo" style="display: inline;">Modibbo Adama University of Technology</p><br>
                <i class="txtlogo" style="font-family: 'magnetor';">Education for Developement.............
                <span class="glyphicon glyphicon-pencil" style="color: #fff;"></span></i>
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
                    <li><a href="index.html"><span class="glyphicon glyphicon-home" style="font-size: 10px;"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-briefcase  " style="font-size: 10px;"></span> About</a></li>
                    <li><a href="adminsite.html" class="active"><span class="glyphicon glyphicon-briefcase  " style="font-size: 10px;"></span> Admin Site</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-th" style="font-size: 10px;"></span> Galary</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-calendar" style="font-size: 10px;"></span> Academic Calender</a></li>
                </ul>
            </div>



            <div class="navbar-default sidebar" role="navigation" style="background-color: silver;">
                <div class="sidebar-nav navbar-collapse" style="background-color: #930; margin-top: -50px;border-radius: 0px 0px 10px 10px;">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <label class="label" style="color:#fff;font-size: 15px;">Welcome Admin</label>
                                <span class="input-group-btn">
                                <button class="btn btn-circle" style="background-color: #fff" type="button">
                                    <i class="glyphicon glyphicon-log-out" style="color: #000"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html" ><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#" class="active"><i class="fa fa-edit fa-fw"></i> Manage Record</a>
                        </li>
                        <li>
                            <a href="#"  ><i class="fa fa-picture-o fa-fw"></i> View Registered Students</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Search Students Record</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Approve Courses Registered<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="first.html">First Semester</a>
                                </li>
                                <li>
                                    <a href="second.html">Second Semester</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Printing and Logout<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Blank Page</a>
                                </li>
                                <li>
                                    <a href=".html">Logout</a>
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
                    <h3 class="panel-title txtlogo" style="font-size: 15px;">ADMIN CONTROLS
                    <span class="glyphicon glyphicon-user" style="float: right;margin:0px 10px;font-size: 36px;">
                    </span></h3>
                </div>
        <div class="panel-body">
            <form role="form">
                            <fieldset>
                          <table border="2" class="table table-responsive" style="overflow: scroll;">
                              <th><span class="glyphicon glyphicon-list" style="color: #aaa;"></span> s/n:</th>
                              <th><span class="glyphicon glyphicon-pushpin" style="color: #aaa;"></span> Registration Number:</th>
                              <th><span class="glyphicon glyphicon-sunglasses" style="color: #aaa;"></span> Semester:</th>
                              <th><span class="glyphicon glyphicon-filter" style="color: #aaa;"></span> Number Of Courses:</th>
                              <th><span class="glyphicon glyphicon-ok" style="color: #aaa;"></span> Approved</th>
                               <th><span class="glyphicon glyphicon-remove" style="color: #aaa;"></span>Not Approve</th>
                            <tr>
                                <td>1</td>
                                <td>UG14/sccs/1037</td>
                                <td>First Semester</td>
                                <td>7</td>
                                <td><a href="" class="btn btn-md btn-success btn-block"><span class="glyphicon glyphicon-ok">Approved</span></a></td>
                                <td><a href="" class="btn btn-md btn-danger btn-block"><span class="glyphicon glyphicon-remove">NotApproved</span></a></td>
                            </tr>
                            <tr>
                                <td>Operating System</td>
                                <td>COSC711</td>
                                <td>3</td>
                                <td>Core</td>
                                <td><a href="" class="btn btn-md btn-success btn-block"><span class="glyphicon glyphicon-ok">Approved</span></a></td>
                                <td><a href="" class="btn btn-md btn-danger btn-block"><span class="glyphicon glyphicon-remove">NotApproved</span></a></td>
                            </tr>
                            <tr>
                                <td>Web Technology and Development</td>
                                <td>COSC700</td>
                                <td>4</td>
                                <td>Core</td>
                                <td><a href="" class="btn btn-md btn-success btn-block"><span class="glyphicon glyphicon-ok">Approved</span></a></td>
                                <td><a href="" class="btn btn-md btn-danger btn-block"><span class="glyphicon glyphicon-remove">NotApproved</span></a></td>
                            </tr>
                            <tr>
                                <td>Software Engineering</td>
                                <td>COSC721</td>
                                <td>3</td>
                                <td>Elective</td>
                                <td><a href="" class="btn btn-md btn-success btn-block"><span class="glyphicon glyphicon-ok">Approved</span></a></td>
                                <td><a href="" class="btn btn-md btn-danger btn-block"><span class="glyphicon glyphicon-remove">NotApproved</span></a></td>
                            </tr>
                            <tr>
                                <td>Computer Graphics and Design</td>
                                <td>COSC704</td>
                                <td>7</td>
                                <td>Elective</td>
                                <td><a href="" class="btn btn-md btn-success btn-block"><span class="glyphicon glyphicon-ok">Approved</span></a></td>
                                <td><a href="" class="btn btn-md btn-danger btn-block"><span class="glyphicon glyphicon-remove">NotApproved</span></a></td>
                            </tr>
                             <tr>
                                <td>Networking and Engineering</td>
                                <td>COSC706</td>
                                <td>5</td>
                                <td>Core</td>
                                <td><a href="" class="btn btn-md btn-success btn-block"><span class="glyphicon glyphicon-remove">Approved</span></a></td>
                                <td><a href="" class="btn btn-md btn-danger btn-block"><span class="glyphicon glyphicon-remove">NotApproved</span></a></td>
                            </tr>
                            <tr>
                                <td>Networking and Engineering</td>
                                <td>COSC706</td>
                                <td>5</td>
                                <td>Core</td>
                                <td><a href="" class="btn btn-md btn-success btn-block"><span class="glyphicon glyphicon-ok">Approved</span></a></td>
                                <td><a href="" class="btn btn-md btn-danger btn-block"><span class="glyphicon glyphicon-remove">NotApproved</span></a></td>
                            </tr>
                          </table>

                            
                    
                             


                     
                                <!-- Change this to a button or input when using this as a form -->
                               
                           





                                <!-- Change this to a button or input when using this as a form -->
                                 <button class="btn btn-md btn-success" onclick="window.print();"><span class="glyphicon glyphicon-floppy-save" ></span>  Save Record</button>
                                <a href="passport.html" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-trash" style="color: #fff;font-size: 14px;"></span></span>  Cancel</a>
                            </fieldset>
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
