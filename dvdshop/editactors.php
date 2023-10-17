<?php
if(!isset($_GET['actorid'])){
    header("refresh: 0; url=http://localhost/dvdshop/actors.php");
}
require 'conn.php';
$sql = "SELECT * FROM actormovie WHERE actorid='$_GET[actorid]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container"><br>
    <h1>Edit Actors</h1>
    <form id="form1" name="form1" method="post" action="editactsuccess.php"><br>
         <p>

            <label for="actorid">ไอดีนักแสดง</label>
            <input type="text" name="actorid" id="actorid" value="<?=$row['actorid'];?>" />

        </p>

        <p>

            <label for="aname">ชื่อ</label>
            <input type="text" name="aname" id="aname" value="<?=$row['aname'];?>" />

        </p>

        <p>

            <label for="alastname">นามสกุล</label>

            <input type="alastname" name="alastname" id="alastname" value="<?=$row['alastname'];?>" />

        </p>

        <p>

            <label for="atelephone">เบอร์โทรศัพท์</label>

            <input type="text" name="atelephone" id="atelephone" value="<?=$row['atelephone'];?>" />

        </p>

        <p>

            <label for="namemovie">ชื่อหนัง</label>

            <input type="text" name="namemovie" id="namemovie" value="<?=$row['namemovie'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='actors.php'>ย้อนกลับ</a>
    </form>
</body>

</html>