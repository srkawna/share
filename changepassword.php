<?php
	
	include("content/databaseconn.php");
	session_start();
    global $temp;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <meta charset="utf-8" />
    <link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="content/bootstrap/css/StyleSheet.css" rel="stylesheet" />

</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding-top:0px;">
        <div class="container" align="center">

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
    <div class="container">
        <div class="row">
            <div class=" col-md-offset-1">
                <div class=" panel panel-default">
                    <div class=" panel-body">
                    </div>
                </div>



                <div class=" col-md-11">
                    <div class=" panel panel-default">
                        <div class=" panel-heading">
                            <h4 class=" panel-title">Change Password</h4>
                        </div>
                        <div class=" panel-body">
                            <form class="form-horizontal" action="changepassword.php" method="post">
                               






                                <div class="form-group">
                                    <label for="Password" class="col-sm-4 control-label">Enter Old Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Enter Old Password">
                                    </div>
                                </div>





                                <div class="form-group">
                                    <label for="Re-Password" class="col-sm-4 control-label"><h5><strong>Enter New Password</strong></h5></label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="Re-Password" name="Re-Password" placeholder="Enter New Password">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Re-Password" class="col-sm-4 control-label"><h5><strong>Re-enter New Password</strong></h5></label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" id="Re-Password" name="RRe-Password" placeholder="Re-enter New Password">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-5 col-sm-7">
                                        <div class="col-sm-4 col-sm-8">
                                            <button type="submit" name="submit" class="btn btn-success">Save</button>
                                        </div>
                                        <?php 
                                            $temp=$_SESSION['pass'];
                                    

                                        	if (isset($_POST['submit']))
                                        	{

                                                 $oldpass=$_POST["Password"];
                                                 $newpass=$_POST["Re-Password"];
                                                 $repass=$_POST["RRe-Password"];
                                                 if($newpass==$repass && $temp==$oldpass)
                                                 {
                             						$query="update signup set password='$newpass' where password='$oldpass'";	
                                                	$result=mysqli_query($conn,$query);
                                                	if (!$result) 
                                                	{
                                                    	die("query failed.."); 
                             						}	
                                                    else
                                                    {
                                                        echo "Password changed successfully..";
                                                    }
                             					}
                             				}

                                         ?>	


                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <script src="content/bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
    <script src="content/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
</body>
<?php include("content/closeconn.php"); ?>
</html>