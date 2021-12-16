<?php
    require_once('./config/dbconn.php');
    $db = new crud();
    $result2=$db->view_bookuser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Package</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
        <header>
			<div id="header">
				<div id="logo">
					<a href="adminhome.php"> <img id = "logopic" src = "img/logo.png" /></a>
				</div>
				<div id="navigation">
					<ul>
						<a href="viewbook.php"><li class="link">Booking</li></a>
						<a href="movies.php"><li class="link">Movie</li></a>
                        <a href="packages.php"><li class="link">Packages</li></a>
						<a href="login.php"><li class="link">LOGOUT</li></a>
					</ul>
				</div>
			</div>
		</header>

    <div class="container py-5">
		<div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> Booking for Package</h2>
                        <button class="btn btn-info" ><a href='packages.php'> Back</a></button>
                    </div>
                    <div class="card-body">
                        <?php
                              $db->display_message(); 
                              $db->display_message();
                              $db->display_message();
                        ?>   
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 10%"> ID </td>
                                <td style="width: 10%"> PackID </td>
                                <td style="width: 10%"> FirstName </td>
                                <td style="width: 10%"> LastName </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data2 = mysqli_fetch_assoc($result2))
                                    {
                                ?>
                                    <td><?php echo $data2['id'] ?></td>
                                    <td><?php echo $data2['packid'] ?></td>
                                    <td><?php echo $data2['fname'] ?></td>
                                    <td><?php echo $data2['lname'] ?></td>   
                            </tr>
                            <?php
                                    }
                                    ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>