<link rel="stylesheet" type="text/css" href="bootstrap.css">


<title>Write Your First Blog Post</title>
<div class="jumbotron text-center">

simple blog system - <a href="http://www.fundsmaker.com">Naveens lab</a>

</div>

<div class="col-sm-12 text-left">

<h4>title</h4>
<form action="write.php" method="POST">
<input type="text" name="title" class="form-control" placeholder="enter a suitable title">

<br/>
<br/>
<h4>description</h4>
<textarea name="description" class="form-control" style="height: 270px;" placeholder="enter a description">

</textarea>
<br/>
<br/>
<div class="text-center">
<input type="submit" name="submit" class="btn btn-primary" value="post">
</form>
</div>
</div>



<?php 

if (isset($_POST['title']) && isset($_POST['description'])) {

	if (!empty($_POST['title']) && !empty($_POST['description'])) {

$title = $_POST['title'];
$description  = $_POST['description'];
//making a database connection

$db_con = mysqli_connect('localhost', 'root', 'naveen17', 'acest');

$sql = "INSERT INTO `blog`(`title`, `description`) VALUES ('$title', '$description')";


//send a query to database to store the data

$query = mysqli_query($db_con, $sql);





	}
}








?>