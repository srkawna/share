<?php
	
	include("content/databaseconn.php");
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>footer</title>
    <meta charset="utf-8" />
    <link href="content/bootstrap/css/bootstrap.min.css" rel="s1" />
    <link href="content/bootstrap/css/S1.css" rel="s1" />
</head>
<body>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">Panel title</h3>
            <ul class="pagination pagination-panel pull-right">
                <li><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            Panel Content
            <hr>
            Panel Content
            <hr>
            Panel Content
        </div>
        <div class="panel-footer">
            Panel Footer
            <ul class="pagination pagination-panel pull-right">
                <li><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>

    </div>
    <script src="content/bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
    <script src="content/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>

</body>
<?php include("content/closeconn.php"); ?>
</html>
