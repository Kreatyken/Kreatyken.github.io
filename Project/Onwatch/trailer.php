<?php
        require_once('./config/dbconn.php');
        $db = new crud();
        $id = $_GET['U_ID'];
        $result = $db->get_trailer($id);
        $data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Clip</title>
</head>
<body>
    <?php
                if (mysqli_num_rows($result)> 0) {
                    ?>
                    <video src = "trailer/<?=$data['trailer']?>" controls>
                    </video>
                    <?php
                }

                else {
                    echo "empty";
                }  
            ?>   
</body>
</html>