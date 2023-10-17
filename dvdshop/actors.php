<?php
    require 'conn.php';
    $sql = "SELECT * FROM actormovie";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Actors Bio</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><h3>DVDShop</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="mainmenu.php">Member <span class="sr-only"></span></a>
                <a class="nav-item nav-link active" href="actors.php">Actors</a>
                <a class="nav-item nav-link" href="dvdproduct.php">Movies</a>
                <a class="nav-item nav-link " href="buydvd.php">BuyDVD</a>
                </div>
            </div>
            </nav>
    <div class="container"><br><br>
        <h1>Actors Bio</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">เบอร์โทรศัพท์</th>
                    <th scope="col-4">ชื่อหนัง</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["actorid"]."</td>"."<td>".$row["aname"]." ".$row["alastname"]."</td>"."<td>".$row["atelephone"]."</td>"."<td>".$row["namemovie"]."</td>"."<td>"."<a class='btn btn-warning' href='editactors.php?actorid=".$row["actorid"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertactor.php'>Insert Actors</a>
    </div>
</body>

</html>