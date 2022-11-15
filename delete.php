<?php
include("connection.php");
error_reporting(0);
$sid = $_GET['sid'];
$query = "DELETE FROM STUDENT WHERE stud_id='$sid'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<font color='green'><h3>Record Successfully Delete From Table</h3>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/les/displayst.php">
	<?php
}

else 
{
	echo "<font color='red'><h3>!! Sorry, Delete Process Failed</h3>";
}

?>