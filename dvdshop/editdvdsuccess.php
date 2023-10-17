<?php
require 'conn.php';
$sql_update="UPDATE dvdproduct SET idmovie='$_POST[idmovie]',namemovie='$_POST[namemovie]',typemovie='$_POST[typemovie]' ,nationality='$_POST[nationality]' ,timemovie='$_POST[timemovie]' WHERE idmovie='$_POST[idmovie]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/dvdproduct.php");
}

?>