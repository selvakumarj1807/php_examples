<?php

$con=new mysqli("localhost","root","","users");

$sql="insert into details(name,age,mail) values ('{$_POST["na"]}','{$_POST["ag"]}','{$_POST["ma"]}')";

$con->query($sql);

?>