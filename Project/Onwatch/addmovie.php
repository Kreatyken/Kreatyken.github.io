<?php
     require_once('./config/dbconn.php');
     $connection= new mysqli('localhost','root','','movie');

     if(isset($_POST['upload']))
        {
            $image=$_FILES["image"]["name"];
            $image_text=$_POST['image_text'];
            $trailer=$_FILES["trailer"]["name"];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $extension = substr($image,strlen($image)-4,strlen($image));
            $allowed_extensions = array(".jpg","jpeg",".png",".gif",".PNG",".JPG",".JPEG"
                                ,".mp4",".MP4",".webm",".WEBM",".avi",".AVI",".flv",".FLV",".mkv",".MKV");
 
            if(!in_array($extension,$allowed_extensions))
            {
                echo "<script>alert('Invalid format.');</script>";
            }
            else
            {
                    $target = "img/".basename($image);
                    $vid = "trailer/".basename($trailer);
                    move_uploaded_file($_FILES["image"]["tmp_name"],$target);
                    move_uploaded_file($_FILES["trailer"]["tmp_name"],$vid);
            
                    $query=mysqli_query($connection, "INSERT INTO movies(image,image_text,trailer,date,time) 
                                                VALUES('$image','$image_text','$trailer','$date','$time')");
                
                if ($query) {
                    echo "<script>alert('You have successfully inserted the data');</script>";
                    echo "<script type='text/javascript'> document.location ='movies.php'; </script>";
                } 
                else
                {
                    echo "<script>alert('Something Went Wrong. Please try again');</script>";
                }
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Add Movie</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Add Movie </h2>
                    </div>
                            <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <label>Movie Banner</label>
                                        <input type="hidden" name="size" value="1000000">
                                        <input type="file" name="image" value="" class="form-control mb-2">
                                        <label>Movie Name</label>
                                        <input type="text" name="image_text" placeholder="Movie Name" class="form-control mb-2" required>
                                        <label>Movie Trailer</label>
                                        <input type="hidden" name="size" value="1000000">
                                        <input type="file" name="trailer" value="" class="form-control mb-2">
                                        <input type="date" name="date" placeholder="Date" class="form-control mb-2" required>
                                        <input type="time" name="time" placeholder="Time" class="form-control mb-2" required>
                            </div>
                            <div class="card-footer">
                                    <button class="btn btn-success" type="submit" name="upload"> Save </button>
                                    <button class="btn btn-info" type="button"><a href='movies.php'> Back</a></button>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>