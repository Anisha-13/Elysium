<?php
include "db_conn.php";
 
if(isset($_POST['POST'])){
    $title =$_POST['title'];
    $type=$_POST['type'];
    $locn=$_POST['locn'];
    $message=$_POST['message'];

    $sql2 = "INSERT INTO post(title, type, location,message) VALUES('$title', '$type', '$locn','$message')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
               echo "successfully posted";
           
       }else {
               echo "Please Post again!!!";
            exit();
       }

}

?>
