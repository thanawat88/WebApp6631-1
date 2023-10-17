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
    <h1>Buy Movies</h1><br>
    <form id="form1" name="form1" method="post" action="insertbuydvdsuccess.php">
        <p>

        <label for="purchase_id">ไอดีขาย</label>
        <input type="text" name="purchase_id" id="purchase_id">

        </p>
        <p>

            <label for="id">ไอดีสมาชิก</label>
            <input type="text" name="id" id="id" >

        </p>

        <p>

            <label for="idmovie">ไอดีหนัง</label>

            <input type="text" name="idmovie" id="idmovie">

        </p>

        <p>

            <label for="purchase_date">วันจำหน่าย</label>

            <input type="date" name="purchase_date" id="purchase_date">

        </p>

        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='buydvd.php'>ย้อนกลับ</a>
    </form>
</body>

</html>