<?php
	include("content/databaseconn.php");
    session_start();
    global $user; //$file_name, $file_size, $file_tmp, $file_type, $FileHeading, $subjects, $description, $time;
                                
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Files</title>
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

                            <h4 class=" panel-title">File Upload list</h4>
                        </div>
                        <div class=" panel-body">
                            
                            <?php
                                $user=$_SESSION['user'];
        
                                if(isset($user))
                                {   
                                    $query="select emailid,heading,subject,description,name,mime,size,data,time from upload where emailid='$user'";    
                                    $result=mysqli_query($conn,$query);
                                        
                                    if (!$result) 
                                    {
                                        die("query failed.."); 
                                    }   
                                    else
                                    {
                                          while($row=mysqli_fetch_assoc($result))
                                          {

                                            if($row["emailid"]==$user)
                                            {
                                            	?>
                                            	<table border="1">
                                            		<tr>
                                            			<th>Email-id</th>
                                                		<th>File Heading</th>
                                                		<th>Subject</th>
                                                		<th>Description</th>
                                                		<th>Name</th>
                                                		<th>mime</th>
                                                		<th>Size</th>
                                                		<th>data</th>
                                                		<th>time</th>
                                                	</tr>
                                            		
                                            		<tr>
                                            			<td><?php echo $row["emailid"];?> 	  </td>
                                                		<td><?php echo $row["heading"];?>     </td>
                                                		<td><?php echo $row["subject"];?>     </td>
                                                		<td><?php echo $row["description"];?> </td>
                                                		<td><?php echo $row["name"];?>        </td>
                                                		<td><?php echo $row["mime"];?>        </td>
                                                		<td><?php echo $row["size"];?>        </td>
                                                		<td><?php echo $row["data"];?>        </td>
                                                		<td><?php echo $row["time"];?>        </td>
                                                	</tr>
                                                </table>
                                               <?php
                                            }
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
