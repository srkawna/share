
<?php
	include("content/databaseconn.php");
    session_start();
    global $user, $name,$sub,$name1; //$file_name, $file_size, $file_tmp, $file_type, $FileHeading, $subjects, $description, $time;
                                
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Download Files Page</title>
    <meta charset="utf-8" />
    <link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="content/bootstrap/css/StyleSheet.css" rel="stylesheet" 0 />
   
</head>
<body>
        <div class="navbar navbar-inverse" role="navigation" style="margin:0px;">
            <div class=" container-fluid">
                <a class="navbar-brand" href="Mainpage.php"><b>ShareLink</b> </a>
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
                                    <h4 class=" panel-title">Download files Page</h4>
                                </div>


                                <div class=" panel-body">
                                  
                                       <form class="form-horizontal" action="downloadpage.php" method="post" enctype="multipart/form-data">
                                         <!--  <div style="width:750px;height:350px;line-height:3em;overflow:scroll;padding:6px;"> -->



                                               <div class="form-group">
                                              <!--     <label for="year" class="col-sm-3 control-label">Year</label>
                                                   <div class="col-sm-4">
                                                       <div class="btn-group">
                                                         <select name="year"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                               Year <span class="caret"></span>
                                                           </button>
                                                           <ul class="dropdown-menu" role="menu">
                                                               <option value="2"><li><a href="#">2</a></li></option>
                                                               <option value="3"><li><a href="#">3</a></li></option>
                                                               <option value="4"><li><a href="#">4</a></li></option>
                                                           </ul></select>
                                                           -->





                                                           <label for="Subject" class="col-sm-2 control-label">Subject ID</label>
                                                           <div class="col-sm-2">
                                                               <div class="btn-group">
                                                                   <select name="subject"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                       Subject ID<span class="caret"></span>
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

                                                               				<button type="submit" name="OK" class="btn btn-success"> OK </button> 

                                                           </div>																	                                                                                                                  			 
                                                       </div>

                                                       				<h4 align="center"> Click To Download </h4>
                                               						<table border="1" align="center" id="table1" cellpadding="0" cellspacing="0">
											   						
																		<?php
																				$user=$_SESSION['user'];
																				
																				if(isset($_POST['OK']))
																				{
   											  	 									$sub=$_POST["subject"];
                                              
																					$query="select name,emailid from upload where subject='$sub'";
																					$result=mysqli_query($conn,$query);
																					if (!$result) 
                                                    								{
                                                    									die("query failed.."); 
                                                    								}

																					while($row=mysqli_fetch_array($result))
																					{
																						$name=$row['name'];
																						$name1=$row['emailid'];
																						?>
																						<tr>
																						<tr>
																							<td align="center" width="300">
																								<a href="download.php?filename=<?php echo $name;?>"><?php echo $name ;?></a>
																							</td>
																							<td align="center" width="300">
																								<?php echo $name1 ;?>
																							</td>
																						</tr>
																						</tr>

																		<?php
												 									}
												 								}
												 	
												 						?>

                                                   </div>
                                               </div>

                                           <!--    <div class="form-group">
                                                   <div class="col-sm-offset-9 col-sm-3">
                                                       <div class="col-sm-2 col-sm-10">
                                                           <button type="submit" class="btn btn-success">download</button>
                                                       </div>
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <div class="col-sm-offset-9 col-sm-3">
                                                       <div class="col-sm-2 col-sm-10">
                                                           <button type="submit" class="btn btn-success">download</button>
                                                       </div>
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <div class="col-sm-offset-9 col-sm-3">
                                                       <div class="col-sm-2 col-sm-10">
                                                           <button type="submit" class="btn btn-success">download</button>
                                                       </div>
                                                   </div>
                                               </div>

                                               <div class="form-group">
                                                   <div class="col-sm-offset-9 col-sm-3">
                                                       <div class="col-sm-2 col-sm-10">
                                                           <button type="submit" class="btn btn-success">download</button>
                                                       </div>
                                                   </div>
                                               </div>

                                               <div class="progress">
                                                   <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                       <span class="sr-only">50% Complete</span>
                                                   </div>  -->
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
    <?php include("content/closeconn.php"); ?>
</body>
</html>
