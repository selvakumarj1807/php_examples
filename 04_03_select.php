<?php
$con = new mysqli("localhost","root","","comment");

$sql = "select * from datas order by id desc";

$res = $con->query($sql);

if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
        echo "<p>{$row["comments"]}  :  <i>{$row["logs"]}</i></p>";
    }
}

else
{
    echo "<p>No comment available</p>";
}
?>