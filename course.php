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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: #930;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#col">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                <div class="caption">
                <a class="navbar-brand" href="index.html">
                <img src="img/mautech-logo-1.png" width="10%" height="5px" style="margin-top: -10px;float: left;" class="img-responsive"><p class="txtlogo" style="display: inline;">Modibbo Adama University of Technology</p><br>
                <i class="txtlogo" style="font-family: 'magnetor';">Education for Developement.............
                <span class="glyphicon glyphicon-pencil" style="color: #fff;"></span></i>
                </a></div>
        

            <div class="navbar-default sidebar" role="navigation" style="background-color: #930;margin-top: 62px;">
                <div class="sidebar-nav navbar-collapse" style="background-color: #930; margin-top: 0px;border-radius: 0px 0px 10px 10px;">
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
                            <a href="index.html"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="biodata.html"><i class="fa fa-edit fa-fw"></i> Bio-Data</a>
                        </li>
                        <li>
                            <a href="passport.html"><i class="fa fa-picture-o fa-fw"></i> Upload Passport</a>
                        </li>
                        <li>
                            <a href="course.html" class="active"><i class="fa fa-edit fa-fw"></i> Courses Registration Form</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Approved Courses<span class="fa arrow"></span></a>
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
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Logout</a>
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
                    <div class="panel-heading" style="background-color:#930;height: 4em">
                        <h3 class="panel-title" style="font-size: 16px;">FIRST SEMESTER COURSES<span class="glyphicon glyphicon-record" style="float: right;margin:0px 0px;font-size: 16px;"></span></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                          <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; ">Course Title:</label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; ">Course Code:</label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; ">Course Unit:</label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; ">Course Status:</label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>

                            
                    <div class="login-panel panel panel-default" style="margin-top: 0px;">
                    <div class="panel-heading" style="background-color:#930;height: 4em">
                        <h3 class="panel-title" style="font-size: 16px;">SECOND SEMESTER COURSES<span class="glyphicon glyphicon-record" style="float: right;margin:0px 0px;font-size: 16px;"></span></h3>
                    </div>
                    <div class="panel-body">
                     <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; ">Course Title:</label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; ">Course Code:</label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; ">Course Unit:</label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; ">Course Status:</label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>Select course title</option>
                                                <option>Information System</option>
                                                <option>Software Engineering</option>
                                                <option>Operating System</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>Select course code</option>
                                                <option>COSC401</option>
                                                <option>COSC402</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control" >
                                                <option>select unit</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="label" style="color:#aaa;font-size: 15px; "></label>
                                            <select class="form-control">
                                                <option>select status</option>
                                                <option>Core</option>
                                                <option>Elective</option>
                                            </select>
                                        </div>
                            </div>
                        </div>
                        </div>
                            </fieldset>
                             


                     
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="result.html" class="btn btn-md btn-success"><span class="glyphicon glyphicon-floppy-save"></span>  Save</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
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
