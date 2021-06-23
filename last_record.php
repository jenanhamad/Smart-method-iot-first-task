<html>
<body>
<h1>FETCH LAST ROW</h1>   



<?php

 
$connection = mysqli_connect("localhost","root","","motors");


$res = mysqli_query($connection, "SELECT * FROM motors ORDER BY MotorId DESC LIMIT 1");

$print_data = mysqli_fetch_row($res);


$res2 = mysqli_query($connection, "SELECT * FROM runvalues ORDER BY RunID DESC LIMIT 1");

$print_data2 = mysqli_fetch_row($res2);

mysqli_close($connection);


echo"Motor Table";
echo "<br>";
echo"------------";
echo "<br>";
echo "MotorId = ".$print_data[0];
echo "|";
echo "Motor1 =  ".$print_data[1];
echo "|";
echo "Motor2 =  ".$print_data[2];
echo "|";
echo "Motor3 =  ".$print_data[3];
echo "|";
echo "Motor4 =  ".$print_data[4];
echo "|";
echo "Motor5 =  ".$print_data[5];
echo "|";
echo "Motor6 =  ".$print_data[6];
echo"<br>";
echo"------------";
echo"<br>";
echo"RUN VALUES";
echo "<br>";
echo"------------";
echo "<br>";
echo "<tr><td>ID|</td><td>ON|</td><td>OFF|</td></tr>";
echo"<br>";
echo 
"<tr>
<td>$print_data2[0]|</td>
<td>$print_data2[1]|</td>
<td>$print_data2[2]</td>
</tr>";




?>

</body>
</html>