<?php
	
	include("content/databaseconn.php");
     
     global $first, $middle, $last, $year, $sem, $emailid, $password, $temp, $row;
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <meta charset="utf-8" />
    <link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="content/bootstrap/css/StyleSheet.css" rel="stylesheet" 0 />

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
                            <h4 class=" panel-title">Student Details </h4>
                        </div>
                        <div class=" panel-body">
                         <!--  <form class="form-horizontal" action="Profile.php" method="post">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="firstname" name="firstname" value='<?php echo $row["firstname"]; ?>' placeholder=""/>

                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="middlename" name="middlename"  value="<?php echo $middle; ?>" placeholder=""/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="lastname"  name="lastname"  value="<?php echo $last; ?>" placeholder=""/>
                                    </div>
                                </div>

                                

                                <div class="form-group">
                                    
                                        <label for="Year" class="col-sm-2 control-label">Year</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="firstname"  name="year" value="<?php echo $year; ?>"  placeholder=""/>
                                        </div>
                                    </div>
                                



                                <div class="form-group">
                                   
                                        <label for="Sem" class="col-sm-2 control-label">Semester</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="firstname"  name="sem"  value="<?php echo $sem; ?>" placeholder=""/>
                                        </div>
                                    </div>
                                





                                <div class="form-group">
                                    <label for="email3" class="col-sm-2 control-label">Email_Id</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email3" name="email3"  value="<?php echo $emailid; ?>" placeholder=""/>
                                    </div>
                                </div>







                                <div class="form-group">
                                    <label for="Password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="Password" name="Password"  value="<?php echo $password; ?>" placeholder=""/>
                                    </div>
                                </div>

                                                                                           
                                <div class="form-group">
                                    <div class="col-sm-offset-5 col-sm-7">
                                        <div class="col-sm-4 col-sm-8">
                                            <button type="submit" name="save" class="btn btn-success">Save</button>
                                        </div>



                                    </div>
                                </div>

                                        

                            </form> -->
                            <?php
                                $temp=$_SESSION['user'];

                                if (isset($temp))
                                {  
                                        $query="select * from signup where emailid='$temp'";
                                        $result=mysqli_query($conn,$query);
                                        if (!$result) 
                                        {
                                            die("query failed.."); 
                                        }   
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                                if($row["emailid"]==$temp)
                                                {
                                                    ?>
                                                        <table align="center" border="1">
                                                            <tr>
                                                                <th>Firstname</th>
                                                                <th>Middlename</th>
                                                                <th>Lastname</th>
                                                                <th>Year</th>
                                                                <th>Semester</th>
                                                                <th>Email-ID</th>
                                                                <th>Password</th>

                                                            </tr>
                                                            <tr>
                                                                    <td><?php echo $row["firstname"]; ?>    </td>
                                                                    <td><?php echo $row["middlename"]; ?>   </td>
                                                                    <td><?php echo $row["lastname"]; ?>     </td>
                                                                    <td><?php echo $row["year"]; ?>         </td>
                                                                    <td><?php echo $row["semester"]; ?>     </td>
                                                                    <td><?php echo $row["emailid"]; ?>      </td>
                                                                    <td><?php echo $row["password"]; ?>     </td>
                                                            </tr>
                                                        </table>
                                                        <?php
                                                }
                                        }
                                }            
                            ?> 

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
