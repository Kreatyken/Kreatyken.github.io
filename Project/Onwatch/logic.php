<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "movie";

    $conn = mysqli_connect($server,$username,$password,
        $database);

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO data(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: blog.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $Id = $_REQUEST['Id'];

        $sql = "DELETE FROM data WHERE Id = $Id";
        mysqli_query($conn, $sql);

        header("Location: blog.php?info=deleted");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $Id = $_REQUEST['Id'];
       $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE data SET title = '$title',  content = '$content' WHERE Id = $Id";
        mysqli_query($conn, $sql);

        header("Location: blog.php?info=updated");
        exit();
    }
