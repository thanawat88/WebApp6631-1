<?php
require 'conn.php';
$sql_update="INSERT INTO actormovie(actorid,aname,alastname,atelephone,namemovie) VALUES ('$_POST[actorid]','$_POST[aname]','$_POST[alastname]' ,'$_POST[atelephone]' ,'$_POST[namemovie]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/actors.php");
}

?>