<?php
$con=mysqli_connect("localhost","root","","babook");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}


// Data for berat
$query = mysqli_query($con,"SELECT berat FROM anak");
$rows = array();
$rows['name'] = 'Berat';
while($tmp= mysqli_fetch_array($query)) {
    $rows['data'][] = $tmp['berat'];
}

// Data for tinggi
$query = mysqli_query($con,"SELECT tinggi FROM anak");
$rows1 = array();
$rows1['name'] = 'Tinggi';
while($tmp = mysqli_fetch_array($query)) {
    $rows1['data'][] = $tmp['tinggi'];
}
/*
// Data for Wheat Flour
$query = mysqli_query($con,"SELECT value FROM value_normal");
$rows2 = array();
$rows2['name'] = 'Normal';
while($tmp = mysqli_fetch_array($query)) {
    $rows2['data'][] = $tmp['value'];
}
*/
$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);

print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 
