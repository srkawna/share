<?php
	
	include("content/databaseconn.php");
     session_start();
     global $temp1, $temp2;
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>MainPage</title>
    <meta charset="utf-8" />
    <link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="content/bootstrap/css/StyleSheet.css" rel="stylesheet" />
    <link href="dark.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div class="navbar navbar-inverse" role="navigation" style="margin:0px;">
        <div class=" container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="collapseExample">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class=" icon-bar"></span>
                    <span class=" icon-bar"></span>
                    <span class=" icon-bar"></span>
                    <span class=" icon-bar"></span>

                </button>
                <a class="navbar-brand" href="Mainpage.php"><b>ShareLink</b> </a>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="collapseExample">

                <ul class="nav navbar-nav nav-tabs">
                <form class=" " action="Mainpage.php" method="post">
                            <button type="submit" class="btn btn-success"><a href="changepassword.php">Change Password</a></button>
                            <button type="submit" name="signout"class="btn btn-success">Sign out</button>
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
                            
                 </ul>
                    
                    </form>
                                   
            </div>

        </div>
    </div>

        

    <div class="container">
        <div id="sidebar">
            <ul>
                <li><a href="Profile.php">Profile</a></li>
                <li><a href="MyFiles.php">My Files</a></li>
                <li><a href="upload.php">Upload File</a></li>
                <li><a href="downloadpage.php">Download File</a></li>
            </ul>
        </div>
        <div class="main-content">
        </div>
    </div>


    
       
    



    <div class="panel-footer">
        <nav>
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <ul class="pagination">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
                <li><a href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    <script src="content/bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
    <script src="content/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>


</body>
<?php include("content/closeconn.php"); ?>
</html>
