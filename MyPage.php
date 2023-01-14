<?php
$con=mysqli_connect("localhost","root","1234","test");
 
if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con, 'set names utf8');

$userId = $_GET['userId'];
$result = mysqli_query($con,"
select accountKey, privateKey from test where userId ='$userId'");
$row = mysqli_fetch_array($result);
$data = $row[0];
$data2 = $row[1];

if($data){
//$json_data = json_encode($data, JSON_UNESCAPED_UNICODE);
//echo $json_data;
echo $data;
echo ",";
echo $data2;
}
mysqli_close($con);

?>