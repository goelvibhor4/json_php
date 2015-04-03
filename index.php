<?php

$con=mysql_connect("localhost","root","") or die('could not connect:'.mysql_error());

mysql_select_db("employee",$con);
$jsondata = file_get_contents('file.json');
$data=json_decode($jsondata,true);
$id=$data['red'];
$sql="insert into color(color)values('$id')";
if(!mysql_query($sql,$con))
    {
        die('Error : ' . mysql_error());
    }
?>