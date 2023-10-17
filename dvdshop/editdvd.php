<?php
if(!isset($_GET['idmovie'])){
    header("refresh: 0; url=http://localhost/dvdshop/dvdproduct.php");
}
require 'conn.php';
$sql = "SELECT * FROM dvdproduct WHERE idmovie='$_GET[idmovie]'";
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
    <h1>Edit Movies</h1><br>
    <form id="form1" name="form1" method="post" action="editdvdsuccess.php">
        <p>

            <label for="idmovie">ID :</label>
            <input type="text" name="idmovie" id="idmovie" value="<?=$row['idmovie'];?>" />

        </p>

        <p>

            <label for="namemovie">ชื่อหนัง</label>

            <input type="text" name="namemovie" id="namemovie" value="<?=$row['namemovie'];?>" />

        </p>

        <p>

            <label for="typemovie">ประเภทหนัง</label>

            <input type="text" name="typemovie" id="typemovie" value="<?=$row['typemovie'];?>" />

        </p>

        <p>

            <label for="nationality">สัญชาติหนัง</label>

            <input type="text" name="nationality" id="nationality" value="<?=$row['nationality'];?>" />

        </p>

        <p>

            <label for="timemovie">ระยะเวลาหนัง</label>

            <input type="text" name="timemovie" id="timemovie" value="<?=$row['timemovie'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='dvdproduct.php'>ย้อนกลับ</a>
    </form>
</body>

</html>