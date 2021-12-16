<?php 
    require_once('./config/dbcon.php');
    $db = new crud();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Add Record</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Add Info </h2>
                    </div>
                        <?php $db->Add_book(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <label for="movie">Movie</label>
                                <input type="text" name="moviename" placeholder="Movie Name" class="form-control mb-2" required>
                                <label for="info">Personal Info</label>
                                <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
                                <input type="tel" name="contact" placeholder="Contact Details" class="form-control mb-2" required>
                                <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="save"> Save </button>
                            <button class="btn btn-info" ><a href='viewbook.php'> Back</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>