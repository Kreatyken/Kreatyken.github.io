<?php
        require_once('./config/dbconn.php');
        $db = new crud();
        $id = $_GET['U_ID'];
        $result = $db->get_pack($id);
        $data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Add Package</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Add Packages </h2>
                        <?php $db->add_packuser(); ?>
                    </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <label>Package Name</label>
                                <input hidden name="packid" class="form-control mb-2" value="<?php echo $data['id']; ?>">
                                <input readonly name="pack" class="form-control mb-2" value="<?php echo $data['pack']; ?>">
                                <label>Info</label>
                                <input type="text" name="fname" placeholder="Enter your First Name" class="form-control mb-2" required>
                                <input type="text" name="lname" placeholder="Enter your Last Name" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="bookpack"> Add </button>
                            <button class="btn btn-info" ><a href='index.php'> Back</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>