<?php
    require_once('./config/dbconn.php');
    $db = new crud();
    $result=$db->view_students();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Activity 2</title>
</head>
<body class="bg-dark">
  <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> Student Record </h2>
                        <button class="btn-link"><a href = "index.php"><h5>LOGOUT</h5><a></button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 10%"> ID </td>
                                <td style="width: 10%"> Name </td>
                                <td style="width: 20%"> Age </td>
                                <td style="width: 20%"> Email </td>
                                <td style="width: 20%"> Gpa </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $data['id'] ?></td>
                                    <td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['age'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['gpa'] ?></td>
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