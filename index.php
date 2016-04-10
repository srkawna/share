<?php
	include("content/databaseconn.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Login Page</title>
<meta charset="utf-8" />
<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="content/bootstrap/css/StyleSheet.css" rel="stylesheet" />
	
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding:0px;">
        <div class="container">
            
            <a class="navbar-brand" style="display:block;padding-top:5px;"
                href="index.php"><span style="float:left;font-size:2.5em;"class="glyphicon glyphicon-cloud" ></span>&nbsp;&nbsp;<b style="display:block;float:left;font-size:22px;padding-top:10px;margin-left:3px;"> Share Cloud</b></a>
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
   
   
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="my-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#my-carousel" data-slide-to="1"></li>
                                <li data-target="#my-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img alt="First slide" src="image/11.jpg">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="Second slide" src="image/892-h_main-w--1- (1).png">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="Third slide" src="image/images.jpg">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#my-carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#my-carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                 </div>
              </div>


            <div class="col-md-4">

                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4 class="panel-title">Login P</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="index.php" method="post">

                            <div class="form-group">

                                <table cellspacing="5px;">
                                    <tr>
                                        <td style="vertical-align:central;"><label for="username" class="col-sm-5 control-label">Username</label></td>
                                        <td><input type="username" class="form-control" id="username" name="username" placeholder="Enter Username"><br /></td>
                                    </tr>
                                    <tr style="margin-top:10px;" >
                                        <td><label for="Password" class="col-sm-5 control-label">Password</label></td>
                                        <td><input type="password" class="form-control" id="Password" name="Password" placeholder="Enter Password"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:center">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Remember me
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr style="text-align:center">
                                        <td><button type="submit" name="signin" class="btn btn-success">Sign in</button></td>

                                        <td><a class="btn btn-success" style="text-decoration:none;" href="signup.php">Sign up</a></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:center">
                                            <a style="text-decoration:none;" href="ForgotPassword.php">Forgot Password</a>
                                        </td>

                                    </tr>
                                </table>
                            </div>
                                
                                    <?php
                                        if (isset($_POST['signin']))
                                         {
                                            $_SESSION['user']=$_POST["username"];
                                            $_SESSION['pass']=$_POST["Password"];
                                             $user=$_POST["username"];
                                             $pass=$_POST["Password"];

                                            $query="select emailid,password from signup";
                                            $result=mysqli_query($conn,$query);
                                            if (!$result) 
                                                {
                                                    die("query failed.."); 
                                                }   
                                            while($row=mysqli_fetch_assoc($result))
                                            {
                                                if($row["emailid"]==$user && $row["password"]==$pass)
                                                {
                                                    $url="Mainpage.php";
                                                    echo '<script>window.location = "'.$url.'";</script>';
                                                
                                                }
                                                   
                                                else
                                                {
                                                    //echo "username or password is incorrect...";
                                                }

                                            }
                                        }
                                    ?>

                              

                          

            
                        </form>


                    </div>

                </div>

                <div class="row">
                    <div class="col-md-offset-8 col-md-4">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

</body>
<script src="content/bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
<script src="content/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
<?php include("content/closeconn.php"); ?>
</html>
