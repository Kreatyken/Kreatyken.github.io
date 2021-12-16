<?php 
    require_once('./config/dbconn.php');
    $db = new crud();
    $db->updatebook();
    $id = $_GET['U_ID'];
    $result = $db->get_book($id);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Update Record</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="title"> Update Record </h2>
                    </div>
                        <?php $db->Add_book(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input type="text" name="name" placeholder=" Name" class="form-control mb-2" required value="<?php echo $data['name']; ?>">
                                <input type="tel" name="contact" placeholder=" Contact Details" class="form-control mb-2" required value="<?php echo $data['contact']; ?>">
                                <input type="email" name="email" placeholder=" Email" class="form-control mb-2" required value="<?php echo $data['email']; ?>">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" name="update"> Update </button>
                            <button class="btn btn-info" type="button"><a href='viewbook.php'> Back</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>