<?php

include("connection.php");
$query = "INSERT INTO STUDENT VALUES ('7','101221','Mansu soni','IV','2008-10-7','M')";
$query = "INSERT INTO TEACHER VALUES ('10003','Pooja malvi','LKG','All','2003-04-07','F','7724252572','poojamalvi230@gmail.com')";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "Record successfully inserted";
}

?>