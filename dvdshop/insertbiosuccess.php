<?php
require 'conn.php';
$sql_update="INSERT INTO member(id,name,lastname,address,telephone) VALUES ('$_POST[id]','$_POST[name]' ,'$_POST[lastname]' ,'$_POST[address]','$_POST[telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/mainmenu.php");
}

?>