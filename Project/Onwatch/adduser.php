<?php 
    require_once('./config/dbconn.php');
    $db = new crud();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Add Student Record</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Add Info </h2>
                    </div>
                        <?php $db->adduser(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="text" name="username" placeholder="Username" class="form-control mb-2" required>
                                <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="pass"> Register </button>
                            <button class="btn btn-info" ><a href='index.php'> Back</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>