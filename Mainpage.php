<?php
	
	include("content/databaseconn.php");
     session_start();
     global $temp1, $temp2;
?>

       <?php
       $temp1=$_SESSION['user'];
       $temp1=$_SESSION['pass'];

       if (isset($_POST["signout"]))
       {
           session_unset();
           session_destroy();
           $url="index.php";
           echo '<script>window.location = "'.$url.'";</script>';

       } 
       ?>
                            
<!DOCTYPE html>
<html>
<head>
    <title>MainPage</title>
    <meta charset="utf-8" />
    <link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="content/bootstrap/css/StyleSheet.css" rel="stylesheet" />
    
</head>
<body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding-top:0px;">
        <div class="container">

            <a class="navbar-brand pull-left" style="display:block;padding-top:5px;"
                href="index.php">
                <span style="float:left;font-size:2.5em;" class="glyphicon glyphicon-cloud"></span>
                &nbsp;&nbsp;
                <b style="display:block;float:left;font-size:22px;padding-top:10px;margin-left:3px;">Share Cloud</b>
            </a>
            <div class="btn-group pull-right" style="padding-top:8px;">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                    <span class="glyphicon glyphicon-cog"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="changepassword.php">Change Password</a>
                    </li>
                    <li>
                        <a href="#">Logout</a>
                    </li>

                </ul>
            </div>
            <a href="Mainpage.php" class="pull-right" style="padding-top:15px;text-decoration:none;padding-right:10px;">
                <span class="glyphicon glyphicon-home"></span>
            </a>
        </div>
    </div>

    <div class="container" style="padding-top:70px;">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">Profile</div>
                    <p class="panel-body" align="center">
                        <a href="Profile.php">
                            <span style="font-size:4.5em;" class="glyphicon glyphicon-user"></span>
                        </a>

                        <br />

                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" align="center">
                    <div class="panel-heading">My Files</div>
                    <p class="panel-body">
                        <a href="MyFiles.php">
                            <span style="font-size:4.5em;" class="glyphicon glyphicon-file"></span>
                        </a>

                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" align="center">
                    <div class="panel-heading">Cloud Upload</div>
                    <p class="panel-body">
                        <a href="upload.php">
                            <span style="font-size:4.5em;" class="glyphicon glyphicon-cloud-upload"></span>
                        </a>

                    </p>
                </div>
            </div>
            <div class="col-md-3">

                <div class="panel panel-default" align="center">
                    <div class="panel-heading">Search</div>
                    <p class="panel-body">
                        <a href="search.php">
                            <span style="font-size:4.5em;" class="glyphicon glyphicon-search"></span>
                        </a>

                    </p>
                </div>
            </div>

        </div>
        <div class="page-header">
            <h4 class="pager">
                Last Uploads
            </h4>
        </div>
        <div class="row" align="center">
            <?php
                

            ?>
            <div class="col-md-2">
                <div class="panel text-center" style="box-shadow: 2px 5px 2px #999;padding:20px;">
                    <span class="glyphicon glyphicon-file" style="font-size:2.5em;"></span>
                    <br />
                    <a href="#" class="">
                        <span class="glyphicon glyphicon-cloud-download"></span>
                        Filename
                    </a>
                </div>

            </div>
        </div>

    </div>

    <script src="content/bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
    <script src="content/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>


</body>
<?php include("content/closeconn.php"); ?>
</html>
