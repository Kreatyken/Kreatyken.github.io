<?php 
    require_once('./config/dbconn.php');
    $db = new crud();
    $db->updatemovie();
    $id = $_GET['U_ID'];
    $result = $db->get_movie($id);
    $data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Update Movie Record</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="title"> Update Movie Details </h2>
                    </div>
                        <?php $db->Add_movie(); ?>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <label>Movie Banner</label>
                                <input type="file" name="image" placeholder=" Image" class="form-control mb-2" value="banner/<?php echo $data['image']; ?>">
                                <label>Movie Name</label>
                                <input type="text" name="image_text" placeholder=" Title" class="form-control mb-2" required value="<?php echo $data['image_text']; ?>">
                                <label>Movie Trailer</label>
                                <input type="file" name="trailer" placeholder=" Image" class="form-control mb-2" value="trailer/<?php echo $data['trailer']; ?>">
                                <input type="date" name="date" placeholder="Date" class="form-control mb-2" required value="<?php echo $data['date']; ?>">
                                <input type="time" name="time" placeholder="Time" class="form-control mb-2" required value="<?php echo $data['time']; ?>">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" name="btn_update"> Update </button>
                            <button class="btn btn-info" type="button"><a href='movies.php'> Back</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>