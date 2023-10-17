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
    <h1>Insert Actors</h1><br>
    <form id="form1" name="form1" method="post" action="insertactorssuccess.php">
        <p>

        <label for="actorid">ไอดีนักแสดง</label>
        <input type="text" name="actorid" id="actorid">

        </p>
        <p>

            <label for="aname">ชื่อ</label>
            <input type="text" name="aname" id="aname">

        </p>

        <p>

            <label for="alastname">นามสกุล</label>

            <input type="text" name="alastname" id="alastname">

        </p>

        <p>

            <label for="atelephone">เบอร์โทรศัพท์</label>

            <input type="text" name="atelephone" id="atelephone">

        </p>

        <p>

            <label for="namemovie">ชื่อหนัง</label>

            <input type="text" name="namemovie" id="namemovie">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='actors.php'>ย้อนกลับ</a>
    </form>
</body>

</html>