<?php

$con=new mysqli("localhost","root","","form_details");

$sql="insert into details(name,dob,mail,password,cpassword,contact) values ('{$_POST["name"]}','{$_POST["dob"]}','{$_POST["email"]}','{$_POST["pass"]}','{$_POST["cpass"]}','{$_POST["contact"]}')";

$con->query($sql);

?>