<?php
include("connection.php");
error_reporting(0);
$tid = $_GET['tid'];
$query = "DELETE FROM TEACHER WHERE teacher_id='$tid'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<font color='green'><h3>Record Successfully Delete From Table</h3>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/les/displaytr.php">
	<?php
}

else 
{
	echo "<font color='red'><h3>!! Sorry, Delete Process Failed</h3>";
}

?>