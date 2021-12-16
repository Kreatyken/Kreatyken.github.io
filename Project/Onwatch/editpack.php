<?php 
    require_once('./config/dbconn.php');
    $db = new crud();
    $db->updatepack();
    $id = $_GET['U_ID'];
    $result = $db->get_pack($id);
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
                        <?php $db->add_pack(); ?>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <label>Type of Package</label>
                                <input type="text" name="pack" placeholder="Package" class="form-control mb-2" required value="<?php echo $data['pack']; ?>">
                                <label>Package</label>
                                <input type="file" name="banner" placeholder="Image" class="form-control mb-2" required value="package/<?php echo $data['banner']; ?>">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" name="updpack"> Update </button>
                            <button class="btn btn-info" type="button"><a href='packages.php'> Back</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>