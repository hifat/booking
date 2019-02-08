<?php
    include('../php/config.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM student WHERE stu_id = '$id'";
    $result = mysqli_query($connect, $sql);

    if($result){
        header('Location: index.php');
    }
    else{
        echo mysqli_error($connect);
    }
?>