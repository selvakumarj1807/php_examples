<?php
$con = new mysqli("localhost","root","","comment");

$sql = "insert into datas(comments,logs) values ('{$_POST["text"]}',now())";

$con->query($sql);
?>