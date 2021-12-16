<?php 
    
    require_once('./config/dbconn.php');
    $db = new dbconn();

    class crud extends dbconn
    {

         public function Add_book()
         {
            global $db;
            if(isset($_POST['save']))
            {
                $name = $db->check($_POST['name']);
                $contact = $db->check($_POST['contact']);
                $email = $db->check($_POST['email']);
                $movie = $db->check($_POST['image_text']);
                $date = $db->check($_POST['date']);
                $time = $db->check($_POST['time']);

                if($this->insert_book($name,$contact,$email,$movie,$date,$time))
                {
                    $this->set_messsage('<div class="alert alert-success"> Record Has Been Added </div>');
                    ?>
                    <script type="text/javascript">window.location.href="viewbook.php"</script>
                    <?php
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
         }

         function insert_book($name,$contact,$email,$movie,$date,$time)
         {
            global $db;
            $sql = "INSERT into book ( name, contact, email, image_text, date, time)
                    VALUES('$name','$contact','$email','$movie','$date','$time')";
            $result = mysqli_query($db->connection,$sql);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
         }

         public function Add_bookuser()
         {
            global $db;
            if(isset($_POST['save']))
            {
                $name = $db->check($_POST['name']);
                $contact = $db->check($_POST['contact']);
                $email = $db->check($_POST['email']);
                $movie = $db->check($_POST['image_text']);
                $date = $db->check($_POST['date']);
                $time = $db->check($_POST['time']);

                if($this->insert_bookuser($name,$contact,$email,$movie,$date,$time))
                {
                    $this->set_messsage('<script> Record Has Been Added </script>');
                    ?>
                    <script type="text/javascript">window.location.href="index.php"</script>
                    <?php
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
         }

         function insert_bookuser($name,$contact,$email,$movie,$date,$time)
         {
            global $db;
            $sql = "INSERT into book ( name, contact, email, image_text, date, time)
                    VALUES('$name','$contact','$email','$movie','$date','$time')";
            $result = mysqli_query($db->connection,$sql);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
         }

         public function updatebook()
         {
             global $db;
 
             if(isset($_POST['update']))
             {
                 $id = $_POST['id'];
                 $name = $db->check($_POST['name']);
                 $contact = $db->check($_POST['contact']);
                 $email = $db->check($_POST['email']);
                 $movie = $db->check($_POST['image_text']);
                 $date = $db->check($_POST['date']);
                 $time = $db->check($_POST['time']);
 
                 if($this->update_book($id,$name,$contact,$email))
                 {
                     $this->set_messsage('<div class="alert alert-success"> Record Has Been Updated </div>');
                     ?>
                     <script type="text/javascript">window.location.href="viewbook.php"</script>
                     <?php
                 }
                 else
                 {   
                     $this->set_messsage('<div class="alert alert-success"> Error </div>');
                 }
 
                
             }
         }

         function update_book($id,$name,$contact,$email)
         {
             global $db;
             $sql = "UPDATE book SET name='$name', contact='$contact', email='$email' where id='$id'";
             $result = mysqli_query($db->connection,$sql);
             if($result)
             {
                 return true;
             }
             else
             {
                 return false;
             }
         }

         public function view_info()
         {
            global $db;
            $sql = "SELECT * from personalinfo";
            $result = mysqli_query($db->connection,$sql);
            return $result;
         }

         public function view_book()
         {
            global $db;
            $sql = "SELECT * from book";
            $result = mysqli_query($db->connection,$sql);
            return $result;
         }

         public function view_trailer()
         {
            global $db;
            $sql = "SELECT trailer from movie WHERE id='$id'";
            $result = mysqli_query($db->connection,$sql);
            return $result;
         }
        
         public function get_movie($id)
         {
            global $db;
            $sql = "SELECT * from movies WHERE id='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;
         }
         public function get_trailer($id)
         {
            global $db;
            $sql = "SELECT trailer from movies WHERE id='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;
         }

         public function get_pack($id)
         {
            global $db;
            $sql = "SELECT * from popdrinks WHERE id='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;
         }

         public function get_book($id)
         {
            global $db;
            $sql = "SELECT * from book WHERE id='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;
         }
        
         public function del_movie($id)
         {
            global $db;
            $sql = "DELETE from movies WHERE id='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;
         }

         public function del_pack($id)
         {
            global $db;
            $sql = "DELETE from popdrinks WHERE id='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;
         }


         public function del_book($id)
         {
            global $db;
            $sql = "DELETE from book WHERE id='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;
         }

         public function updatemovie()
         {
             global $db;
             if(isset($_POST['btn_update']))
             {
                 $id = $_POST['id'];
                 $image = $_FILES['image']['name'];
                 $image_text = $_POST['image_text'];
                 $trailer = $_FILES['trailer']['name'];
                 $date = $_POST['date'];
                 $time = $_POST['time'];

                 $sql="SELECT * FROM movies WHERE id='$id'";
                 $query = mysqli_query($db->connection, $sql);
                 foreach($query as $data)
                 {
                     if ($image == NULL && $trailer == NULL) 
                     {
                         $image= $data['image'];
                         $trailer= $data['trailer'];
                     }
                     else 
                     {
                        //  if ($target = "banner/".$data['image'] && $vid = "trailer/".$data['trailer']) {
                        //      unlink($target);
                        //      unlink($vid);
                        //  }
                     }
                 }

                 $sql_query="UPDATE movies SET image='$image', image_text='$image_text', trailer='$trailer', date='$date', time='$time' WHERE id='$id'";
                 $run_sql = mysqli_query($db->connection, $sql_query);

                 if ($run_sql) 
                 {
                     if($image == NULL && $trailer == NULL)
                     { ?>
                        <script>alert('Updated with existing data!');</script>
                        <script type="text/javascript">window.location.href="movies.php"</script>
                        <?php
                     }
                     else 
                     { 
                        move_uploaded_file($_FILES['image']['tmp_name'], "banner/".$_FILES['image']['name']);
                        move_uploaded_file($_FILES['trailer']['tmp_name'], "trailer/".$_FILES['trailer']['name']);     
                        ?>
                        <script>alert('Movie Updated!');</script>
                        <script type="text/javascript">window.location.href="movies.php"</script>
                        <?php
                    }
                 }
                 else 
                 { ?>
                    <script>alert('Not Updated!');</script>
                    
                    <?php
                 }
 
                
             }
         }
         
         public function Add_movie()
         {
             global $db;
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
                        $target = "banner/".basename($image);
                        $vid = "trailer/".basename($trailer);
                        move_uploaded_file($_FILES["image"]["tmp_name"],$target);
                        move_uploaded_file($_FILES["trailer"]["tmp_name"],$vid);
                
                        $query=mysqli_query($db->connection, "INSERT INTO movies(image,image_text,trailer,date,time) VALUES('$image','$image_text','$trailer','$date','$time')");
                    
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
         }

         

         public function set_messsage($msg)
         {
             if(!empty($msg))
             {
                 $_SESSION['Message']=$msg;
             }
             else
             {
                 $msg = "";
             }
         }
 
         public function display_message()
         {
             if(isset($_SESSION['Message']))
             {
                 echo $_SESSION['Message'];
                 unset($_SESSION['Message']);
             }
         }
         public function check_usertype()
         {
             global $db;

             if (isset($_POST['submit'])) 
             {
                $username = $db->check($_POST['username']);
                $password = $db->check($_POST['password']);
                $usertype = $db->check($_POST['usertype']);

                    $sql = "SELECT * FROM login WHERE username='".$username."' AND password='".$password."' ";
                    $result = mysqli_query($db->connection,$sql);
                    
                if(mysqli_num_rows($result) >0)
                 {
                        while($row = mysqli_fetch_assoc($result)) 
                        {
                        if($row["usertype"] == "admin")
                            {
                            ?>
                            <script>alert('Logged in as Admin!');</script>
                            <script type="text/javascript">window.location.href="adminhome.php"</script>
                            <?php
                            }
                        else
                            {
                            ?>
                            <script>alert('Logged in as Student!');</script>
                            <script type="text/javascript">window.location.href="read.php"</script>
                            <?php 
                            }
                        }
                 }
                else
                 {
				?><script>alert('Wrong Username or Password')</script><?php
			     }
             }		
         }

         public function adduser()
         {   
            global $db;
            if(isset($_POST['danger']))
            {
                $username = $db->check($_POST['username']);
                $password = $db->check($_POST['password']);

                if($this->insert_user($username,$password))
                {
                    $this->set_messsage('<div class="alert alert-success"> User Has Been Added </div>');
                    header("location:index.php");
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
         }

         function insert_user($username,$password)
         {
            global $db;
            $sql = "INSERT into login (username,password) VALUES('$username','$password')";
            $result = mysqli_query($db->connection,$sql);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
         }
         
         public function view_movie()
         {
            global $db;
            $sql = "SELECT * from movies";
            $result = mysqli_query($db->connection,$sql);
            return $result;
         } 

         public function view_pack()
         {
            global $db;
            $sql = "SELECT * from popdrinks";
            $result = mysqli_query($db->connection,$sql);
            return $result;
         }

         public function view_bookuser()
         {
            global $db;
            $sql = "SELECT * from bookpack";
            $result = mysqli_query($db->connection,$sql);
            return $result;
         }
        
         public function add_packuser()
         {
            global $db;
            if(isset($_POST['bookpack']))
            {
                $packid=$_POST['packid'];
                $name=$_POST['pack'];
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];

                if($this->insert_pack($packid,$name,$fname,$lname))
                {
                    $this->set_messsage('<script> Record Has Been Added </script>');
                    ?>
                    <script type="text/javascript">window.location.href="index.php"</script>
                    <?php
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
         }

         function insert_pack($packid,$name,$fname,$lname)
         {
            global $db;
            $sql = "INSERT into bookpack ( packid, pack, fname, lname)
                    VALUES('$packid','$name','$fname','$lname')";
            $result = mysqli_query($db->connection,$sql);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
         }

         public function add_pack()
         {
            global $db;
            if(isset($_POST['package']))
            {
                $name=$_POST['pack'];
                $image=$_FILES["banner"]["name"];
                $extension = substr($image,strlen($image)-4,strlen($image));
                $allowed_extensions = array(".jpg","jpeg",".png",".gif",".PNG",".JPG",".JPEG",".GIF");
     
                if(!in_array($extension,$allowed_extensions))
                {
                    echo "<script>alert('Invalid format.');</script>";
                }
                else
                {
                        $target = "package/".basename($image);
                        move_uploaded_file($_FILES["banner"]["tmp_name"],$target);
                
                        $query=mysqli_query($db->connection, "INSERT INTO popdrinks(pack,banner) 
                                                    VALUES('$name','$image',)");
                    
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
         }

         public function updatepack()
         {
            global $db;
            if(isset($_POST['updpack']))
            {
                $id = $_POST['id'];
                $name = $_POST['pack'];
                $image = $_FILES['banner']['name'];

                $sql="SELECT * FROM popdrinks WHERE id='$id'";
                $query = mysqli_query($db->connection, $sql);
                foreach($query as $data)
                {
                    if ($image == NULL && $trailer == NULL) 
                    {
                        $image= $data['banner'];
                    }
                    else 
                    {
                        if ($target = "package/".$data['banner']) {
                            unlink($target);
                        }
                    }
                }

                $sql_query="UPDATE popdrinks SET pack='$name', banner='$image' WHERE id='$id'";
                $run_sql = mysqli_query($db->connection, $sql_query);

                if ($run_sql) 
                {
                    if($image == NULL)
                    { ?>
                       <script>alert('Updated with existing data!');</script>
                       <script type="text/javascript">window.location.href="packages.php"</script>
                       <?php
                    }
                    else 
                    { 
                       move_uploaded_file($_FILES['banner']['tmp_name'], "package/".$_FILES['banner']['name']);   
                       ?>
                       <script>alert('Updated!');</script>
                       <script type="text/javascript">window.location.href="packages.php"</script>
                       <?php
                   }
                }
                else 
                { ?>
                   <script>alert('Not Updated!');</script>
                   <script type="text/javascript">window.location.href="packages.php"</script>
                   <?php
                }

               
            }
         }
         
         public function email_send()
         {
             global $db;
             if(isset($_POST['send']))
             {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $msg=$_POST['msg'];

                $to='nicejoshualibed@gmail.com';
                $subject='Contact Us';
                $message="Name: ".$name."\n"."Phone: ".$phone."\n". "Write: "."\n\n".$msg;
                $headers="From: ".$email;

                if(mail($to, $subject, $message, $headers))
                {
                    $this->set_messsage('<div class="alert alert-success"> Sent Succesfully </div>');
                    header("location:index.php"); 
                }
                else
                {
                    echo "Error";
                }
             }
         }
    }

?>