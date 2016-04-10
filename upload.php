<?php
	include("content/databaseconn.php");
    session_start();
    global $user, $file_name, $file_size, $file_tmp, $file_type;
                                
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
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

                            <h4 class=" panel-title">File Upload</h4>
                        </div>
                        <div class=" panel-body">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="FileHeading" class="col-sm-2 control-label">File Heading</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="FileHeading" name="FileHeading" placeholder="Enter File Heading">
                                    </div>

                                </div>





                                


                                <div class="form-group">
                                    
                                        <label for="year" class="col-sm-2 control-label">Subject ID</label>
                                        <div class="col-sm-9">
                                            <div class="btn-group">
                                                <select name="subjects"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                   Subject ID <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <option value="1"><li><a href="#">1</a></li></option>
                                                    <option value="2"><li><a href="#">2</a></li></option>
                                                    <option value="3"><li><a href="#">3</a></li></option>
                                                    <option value="4"><li><a href="#">4</a></li></option>
                                                    <option value="5"><li><a href="#">5</a></li></option>
                                                    <option value="6"><li><a href="#">6</a></li></option>
                                                </ul></select>
                                            </div>
                                        </div>
                                    </div>
                             





                                <div class="form-group">
                                    <label for="description" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                    </div>

                                </div>





                                <div class="form-group">
                                    <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
                                    <div class="col-sm-9">
                                        <input type="file" id="exampleInputFile" name="file"/>
                                    </div>





                                    <div class="form-group">
                                        <div class="col-sm-offset-5 col-sm-7">
                                            <div class="col-sm-4 col-sm-8">
                                                <button type="submit" name="submit" class="btn btn-success">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                    



                            </form>
                            <?php
                                $user=$_SESSION['user'];
        
                                if(isset($_FILES['file']))
                                {
                                    $errors=array();
                                    $file_name=$_FILES['file']['name'];
                                    $file_size=$_FILES['file']['size'];
                                    $file_tmp=$_FILES['file']['tmp_name'];
                                    $file_type=$_FILES['file']['type'];
                                    $tmp=explode('.',$_FILES['file']['name']);
                                    $file_ext=strtolower(end($tmp));
                                    $expensions=array("doc","docx","xlxs","pdf");
                                    if(in_array($file_ext, $expensions)===false)
                                    {
                                        $errors[]="extension not allowed choose proper format";
                                    }
                                    if($file_size>2097152)
                                    {
                                        $errors[]="size must be 2 MB";
                                    }
                                    if(empty($errors)==true)
                                    {
                                        move_uploaded_file($file_tmp,"uploads/".$file_name);
                                        echo "Success"."<br>";
                                    }
                                    else
                                    {
                                        print_r($errors);
                                    }
                                }

                                if(isset($_POST['submit']))
                                {
                                        $FileHeading=$_POST["FileHeading"];
                                        $subjects=$_POST["subjects"];
                                        $description=$_POST["description"];
                                        $time=date("Y-m-d");
                                        $query="insert into upload(emailid,heading,subject,description,name,mime,size,data,time) values('{$user}','{$FileHeading}','{$subjects}','{$description}','{$file_name}','{$file_type}','{$file_size}','{$file_tmp}','{$time}')";    
                                        $result=mysqli_query($conn,$query);
                                        
                                        if (!$result) 
                                        {
                                            die("query failed.."); 
                                        }   
                                        else
                                        {
                                             echo "data saved successfully..";
                                        }                       
                                }

                            ?>
                            <?php

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
