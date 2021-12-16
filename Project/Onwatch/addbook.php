<?php 
    require_once('./config/dbconn.php');
    $db = new crud();
    $id = $_GET['U_ID'];
    $result = $db->get_movie($id);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Add Record</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Booking </h2>
                    </div>
                        <?php $db->Add_book(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <label for="info">Personal Info</label>
                                <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
                                <input type="tel" name="contact" placeholder="Contact Details" class="form-control mb-2" required>
                                <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
                                <label>Movie Name</label>
                                <input readonly name="image_text" class="form-control mb-2" value="<?php echo $data['image_text']; ?>">
                                <label>Sched Date</label>
                                <input readonly name="date" class="form-control mb-2" value="<?php echo $data['date']; ?>">
                                <label>Sched Time</label>
                                <input readonly name="time" class="form-control mb-2" value="<?php echo $data['time']; ?>">
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="save"> Save </button>
                            <button class="btn btn-info" type="button"><a href='adminhome.php'> Back</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>