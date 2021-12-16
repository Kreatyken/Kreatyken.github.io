<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require_once 'PHPMailer/Exception.php';
 require_once 'PHPMailer/PHPMailer.php';
 require_once 'PHPMailer/SMTP.php';

 
 if(isset($_POST['send'])){

     $emailAddress = $_POST['email'];
     $name = $_POST['name'];
     $subjectTitle = $_POST['concern'];
     $concern = $_POST['message'];

     $mailTo = "onwatchph@gmail.com";
     $body = "Email Address: ".$emailAddress."<br>Fullname: ".$name."<br><br>".$concern;

     $mail = new PHPMailer();
     
     $mail->SMTPDebug  = 3;  
     $mail->IsSMTP();

     $mail->SMTPSecure = "ssl";
     $mail->Port       = 465;
     $mail->Host = "smtp.gmail.com";
     $mail->SMTPAuth   = TRUE;
     $mail->Username   = "onwatchph@gmail.com";
     $mail->Password   = "Movie_00";
      


     $mail->From = $emailAddress;
     $mail->FromName = $name;

     $mail->addAddress($mailTo, "OnWatch");

     $mail->isHTML(true);
    
     $mail->Subject = "Concern: ".$subjectTitle;
     $mail->Body = $body;
     $mail->AltBody = $concern;


     if(!$mail->send()) {
         // echo "Mailer Error: ".$mail->ErrorInfo;
     } else {
         echo "<script>alert('".$emailAddress."')</script>";
         echo "<script>window.location.href='contact.php';</script>";
     }

 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
        <header>
			<div id="header">
				<div id="logo">
					<a href="#"> <img id = "logopic" src = "img/logo.png" /></a>
				</div>
				<div id="navigation">
					<ul>
						<a href="#" class="active"><li class="link">Home</li></a>
						<a href="about.php"><li class="link">About</li></a>
						<a href="vblog.php"><li class="link">Blogs</li></a>
						<a href="contact.php"><li class="link">Contact Us</li></a>
						<a href="login.php"><li class="link">Login</li></a>
					</ul>
				</div>
			</div>
		</header>
<div class="container py-5">
        <div class="row mt-5">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Contact </h2>
                    </div>
                        <div class="card-body">
                            <form method="POST">
                                <input type="email" name="email" placeholder="Email Address" class="form-control mb-2" required>
                                <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
                                <input type="text" name="concern" placeholder="Subject" class="form-control mb-2" required>
                                <textarea placeholder="Write your message" name="message" required></textarea>       
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" name="send"> Send </button>
                            <button class="btn btn-info" type="button"><a href='index.php'> Back</a></button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="script.js"></script>

</body>
</html>
