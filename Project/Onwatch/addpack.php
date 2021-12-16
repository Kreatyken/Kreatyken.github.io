<?php 
    require_once('./config/dbconn.php');
    $connection= new mysqli('localhost','root','','movie');


    if(isset($_POST['adpack']))
            {
                $name=$_POST['pack'];
                $image=$_FILES["banner"]["name"];
                $ext = substr($image,strlen($image)-4,strlen($image));
                $all_extensions = array(".jpg","jpeg",".png",".gif",".PNG",".JPG",".JPEG",".GIF");
     
                if(!in_array($ext,$all_extensions))
                {
                    echo "<script>alert('Invalid format.');</script>";
                }
                else
                {
                        $target = "package/".basename($image);
                        move_uploaded_file($_FILES["banner"]["tmp_name"],$target);
                
                        $query=mysqli_query($db->connection, "INSERT INTO popdrinks(pack,banner) 
                                                    VALUES('$name','$image')");
                    
                    if ($query) {
                        echo "<script>alert('You have successfully inserted the data');</script>";
                        echo "<script type='text/javascript'> document.location ='packages.php'; </script>";
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
    <title>Add Package</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Add Packages </h2>
                    </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <label>Type of Package</label>
                                <input type="text" name="pack" placeholder="Package Name" class="form-control mb-2" required>
                                <label>Package</label>
                                <input type="hidden" name="size" value="100000">
                                <input type="file" name="banner" value="" class="form-control mb-2">

                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="adpack"> Add </button>
                            <button class="btn btn-info" ><a href='packages.php'> Back</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>