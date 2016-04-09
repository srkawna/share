<?php
	
	include("content/databaseconn.php");
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>extra Page</title>
    <meta charset="utf-8" />
    <link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="content/bootstrap/css/StyleSheet.css" rel="stylesheet" />
    <meta charset="utf-8" />
</head>
<body>
    <div class="navbar navbar-inverse" role="navigation" style="margin:0px;">
        <div class=" container-fluid">
            <a class="navbar-brand" href="#"><b>ShareLink</b> </a>
        </div>
    </div>


    <div class="container">
        <form class="form-horizontal">
            <div class="form-group">
                <div class="row">
                    <label for="Name" class="col-sm-4 control-label">Name</label>
                    <div class="col-sm-6">
                        <input type="Name" class="form-control" id="Name" placeholder="Enter Name">
                    </div>
                </div>
                <div class="row">
                    <label for="Name" class="col-sm-4 control-label">Year</label>
                    <div class="form-group">
                    <div class="col-sm-6">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    </div>


                <div class="row">
                    <label for="Name" class="col-sm-4 control-label">Sem</label>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">8</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-group" role="group">
                    <div class="row">
                        <label for="Name" class="col-sm-4 control-label">Semester</label>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>

                        </ul>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Save</button>
                    </div>
                </div>
            </div>
		</div>
        </form>
    </body>
    <?php include("content/closeconn.php"); ?>
</html>