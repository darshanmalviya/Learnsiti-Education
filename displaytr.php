<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM TEACHER";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !=0)
{
?>
<html>
<head>
<link rel="stylesheet" href="css/btn.css">
</head>
<body background ="..\les\images\abt.png">
<center>
<img src= "..\les\images\18.png" height="150" width="150">
<h1>Teacher List</h1>
	<table border="5" width="1100" height="500">
		<tr>
			<th><h3>Teacher ID</b></th>
			<th><h3>Teacher Name</h3></th>
			<th><h3>Class</h3></th>
			<th><h3>Subject</h3></th>
			<th><h3>Joining</h3></th>
			<th><h3>Sex</h3></th>
			<th><h3>Mobile No</h3></th>
			<th><h3>Email</h3></th>
			<th colspan='2'><h3>Operations</h3></th>
		</tr>
	
<?php
	
	while($result = mysqli_fetch_assoc($data))
	
	{
	
		echo "<tr>
					<th>".$result['teacher_id']."</th>
					<th>".$result['teacher_name']."</th>
					<th>".$result['class']."</th>
					<th>".$result['subject']."</th>
					<th>".$result['joining']."</th>
					<th>".$result['sex']."</th>
					<th>".$result['mobile_no']."</th>
					<th>".$result['email']."</th>
					<th><a href ='update1.php?tid=$result[teacher_id]&tn=$result[teacher_name]&cl=$result[class]&sub=$result[subject]&jn=$result[joining]&sex=$result[sex]&mob=$result[mobile_no]&eml=$result[email]'>Update</a></th>
                    <th><a href ='delete1.php?tid=$result[teacher_id]' onclick=' return checkdelete()'>Delete<a></th> 
              </tr>";
	
	}
	
}

else

{
	echo"No Record Found";
}
?>
</table>
<script>
function checkdelete()
{
	return confirm('Are you sue you want to delete data???');
}
</script>
<br/><br/>
<a href="http://localhost/les/insert1.php"><button type="add">Add</button></a>
<a href="home.html"><button type="back">Back</button></a>
<br/><br/>
</center>
</Body>
</html>
