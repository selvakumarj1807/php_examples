<?php
$con = new mysqli("localhost","root","","users");

$sql = "select * from details where name like '{$_POST["s"]}%'";

$res = $con->query($sql);

echo "
        <table>
        <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        </tr>
     ";

if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
        echo"
                <tr>
                <td>{$row["name"]}</td>
                <td>{$row["age"]}</td>
                <td>{$row["mail"]}</td>
                </tr>
            ";
    }

    echo "</table>";
}

else
{
    echo"<p>no record found</p>";
}
?>