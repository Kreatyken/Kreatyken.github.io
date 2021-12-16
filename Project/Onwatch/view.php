<?php
    require_once('./config/dbconn.php');
    $db = new crud();
    $result=$db->view_info();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>First Term Exam</title>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Movie Site</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewbook.php">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>
    <div class="container">
            <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> Personal Info Records </h2>
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
                                <td style="width: 10%"> Name </td>
                                <td style="width: 10%"> Age </td>
                                <td style="width: 10%"> Email </td>
                                <td style="width: 10%"> Payment </td>
                                <td style="width: 20%" colspan="2">Action</td>
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
                                    <td><?php echo $data['paymethod'] ?></td>
                                    <td><a href="edit.php?U_ID=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="delete.php?D_ID=<?php echo $data['id'] ?>" class="btn btn-info">Delete</a></td>
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