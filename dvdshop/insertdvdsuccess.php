<?php
require 'conn.php';
$sql_update="INSERT INTO dvdproduct(idmovie,namemovie,typemovie,nationality,timemovie) VALUES ('$_POST[idmovie]','$_POST[namemovie]' ,'$_POST[typemovie]' ,'$_POST[nationality]','$_POST[timemovie]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/dvdproduct.php");
}

?>