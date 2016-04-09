<?php
	
	include("content/databaseconn.php");
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>SignUp Page</title>
    <meta charset="utf-8" />
    <link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="content/bootstrap/css/StyleSheet.css" rel="stylesheet"0 />

</head>
<body>
    <div class="navbar navbar-inverse" role="navigation" style="margin:0px;">
        <div class=" container-fluid">
            <a class="navbar-brand" href="index.php"><b>ShareLink</b> </a>
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
                            <h4 class=" panel-title">SignUp Page</h4>
                        </div>
                        <div class=" panel-body">
                            <form class="form-horizontal" action="signup.php" method="post">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="middlename">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
                                    </div>
                                </div>

							

                                <div class="form-group">
                                    
                                        <label for="year" class="col-sm-2 control-label">Year</label>
                                        <div class="col-sm-4">
                                            <div class="btn-group">
                                               <select name="year" > <button type="button" class="btn btn-default dropdown-toggle" id="year" name="year" data-toggle="dropdown">
                                                    Year <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" name="year" role="menu">
                                                    <option value="2"><li><a href="#">2</a></li></option>
                                                    <option value="3"><li><a href="#">3</a></li></option>
                                                    <option value="4"><li><a href="#">4</a></li></option>
                                                </ul></select>
                                            </div>
                                       </div>
                                    </div>
                                 

                                    <div class="form-group">
                                    
                                    <label for="Number" class="col-sm-2 control-label">Semester</label>
                                    <div class="col-sm-4">

                                    <div class="btn-group">
                                    <select name="sem"><button type="button" class="btn btn-default dropdown-toggle" id="sem" name="sem" data-toggle="dropdown">
                                    Sem <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                     <option value="3"><li><a href="#">3</a></li> </option>
                                     <option value="4"><li><a href="#">4</a></li> </option>
                                     <option value="5"><li><a href="#">5</a></li> </option>
                                     <option value="6"><li><a href="#">6</a></li> </option>
                                     <option value="7"><li><a href="#">7</a></li> </option>
                                     <option value="8"><li><a href="#">8</a></li> </option>
                                    </ul></select>
                                    </div>
                                    </div>
                                    </div>
                                   




                                      


                                            <div class="form-group">
                                                <label for="email3" class="col-sm-2 control-label">Email_Id</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email3" id="email3" placeholder="enter email_id">
                                                </div>
                                            </div>







                                            <div class="form-group">
                                                <label for="Password" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" name="Password" id="Password" placeholder="enter Password">
                                                </div>
                                            </div>





                                            <div class="form-group">
                                                <label for="Re-Password" class="col-sm-2 control-label"><h5><strong>Re-enter Password</strong></h5></label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="Re-Password" name="Re-Password" placeholder="Re-enter Password">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-offset-5 col-sm-7">
                                                    <div class="col-sm-4 col-sm-8">
                                                        <button type="submit" name="save"class="btn btn-success">Save</button>
                                                    </div>
                                                    <div class="col-sm-4 col-sm-8">
                                                        <button type="submit" name="back"class="btn btn-success"><a href="index.php">back</a></button>
                                                    </div>
                                                    	<?php 
                                                    	
                                                    		if (isset($_POST['save']))
                                                    		{
                                                    			$first=$_POST["firstname"];
                                                    			$middle=$_POST["middlename"];
                                                    			$last=$_POST["lastname"];
                                                    			$year=$_POST["year"];
                                                    			$sem=$_POST["sem"];
                                                    			$email=$_POST["email3"];
                                                    			$pass=$_POST["Password"];
                                                    			$repass=$_POST["Re-Password"];

                                                    
                                                    			if ($pass==$repass)
                                                    			{
                                                    				$query="insert into signup(firstname,middlename,lastname,year,semester,emailid,password) values('{$first}','{$middle}','{$last}',{$year},{$sem},'{$email}','{$pass}') ";	
                                                    				$result=mysqli_query($conn,$query);
                                                    				if (!$result) 
                                                    				{
                                                    					die("query failed.."); 
                                                    				}
                                                                    else
                                                                    {
                                                                        echo "User Created Successfully..!";
                                                                    }	
                                                    			}
                                                 		         else
                                                 		         {
                                                 		         	echo "password not match..";
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
