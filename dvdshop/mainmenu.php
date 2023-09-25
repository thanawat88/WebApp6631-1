<?php
    require 'conn.php';
    $sql = "SELECT * FROM member";
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
    <title>Member Bio</title>
    <style>
			nav {
				display: flex;
			}

			.nav-btn {
				width: 120px;
				height: 32px;
				display: flex;
				justify-content: center;
				align-items: center;
				transition: 0.3s;
				z-index: 1;

				position: relative;
			}

			.nav-btn::after {
				content: '';
				width: 0%;
				height: 0%;
				position: absolute;
				z-index: -1;
				background-color: rgb(255, 113, 62);
				transition: 0.3s;
			}

			.nav-btn:hover::after {
				width: 100%;
				height: 100%;
			}
		</style>
</head>

<body>
    <h2>Preview :</h2>
		<nav>
			<div class="nav-btn">Home</div>
			<div class="nav-btn">About</div>
			<div class="nav-btn">Contact</div>
		</nav>
    <div class="container">
        <h1>Student </h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">ที่อยู่</th>
                    <th scope="col-4">เบอร์โทร</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td>"."<td>".$row["name"]." ".$row["lastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a class='btn btn-warning' href='editbio.php?id=".$row["id"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertbio.php'>Insert Member</a>
    </div>
</body>

</html>