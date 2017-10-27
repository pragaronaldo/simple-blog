<link rel="stylesheet" type="text/css" href="bootstrap.css">

<div class="jumbotron text-center">


<title>simple blog system | naveens lab</title>
<h2>simple blog system - <a href="http://www.fundsmaker.com">naveens lab</a> </h2>

</div>
<style type="text/css">
a {
	text-decoration: none;
	color: white;
}
a:hover {
	text-decoration: none;
	color: white;
}
<style type="text/css">
a {
	text-decoration: none;
	color: white;
}
a:hover {
	text-decoration: none;
	color: white;
}
<style type="text/css">
a {
	text-decoration: none;
	color: white;
}
a:hover {
	text-decoration: none;
	color: white;
}
<style type="text/css">
a {
	text-decoration: none;
	color: white;
}
a:hover {
	text-decoration: none;
	color: white;
}
a:visited {
	text-decoration: none;
	color: white;
}
.jumbotron {
	background-color: #fd6e05;
	color: white;

}
	#write {
		background-color: #fd6e05;
		color: white;
		padding: 20px;
		
		
	}
	#title {

	}
	#des {

padding: 20px;
border-left: 5px solid #fd6e05;
border-top: 1px solid #eee;
border-bottom: 1px solid #eee;
border-right: 1px solid #eee;
	}
</style>
<div class="col-sm-12 text-center">
<div class="col-sm-2">
</div>
<div class="col-sm-8 text-center">
<?php 

ini_set('display_errors', 1);
ini_set('dispaly_startup_errors', 1);

$db_con = mysqli_connect('localhost', 'root', 'naveen17', 'acest');


$sql = "SELECT * FROM `blog`";

$query = mysqli_query($db_con, $sql);

while ($r = mysqli_fetch_assoc($query)) {

$title = htmlentities($r['title']); //done to escape html chars
$des = htmlentities($r['description']);
echo "<div id='title' class='text-left'><h4><b>";
echo $title;
echo "</b></h4><hr style='border-top: 5px solid #fd6e05; width: 400px; margin-left: 0em;'></div>";
echo "<div id='des' class='text-left'><i><p>";

echo $des;

echo "</i></p></div>";
echo "<br/>
<br/>
";


}




?>

</div>
<div class="col-sm-2">
<a href="write.php" id="write">write a post</a>
</div>

</div>
