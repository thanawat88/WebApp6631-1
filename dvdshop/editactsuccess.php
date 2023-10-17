<?php
require 'conn.php';
$sql_update="UPDATE actormovie SET actorid='$_POST[actorid]',aname='$_POST[aname]',alastname='$_POST[alastname]' ,atelephone='$_POST[atelephone]' ,namemovie='$_POST[namemovie]' WHERE actorid='$_POST[actorid]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/actors.php");
}

?>

