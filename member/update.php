<?php
    include('../php/config.php');

    $id = $_GET['id'];
    $stu_id = $_POST['stu_id'];
    $stu_password = $_POST['stu_password'];
    $stu_fname = $_POST['stu_fname'];
    $stu_lname = $_POST['stu_lname'];

    $sql = "UPDATE student
            SET stu_id = '$stu_id',
                stu_password = '$stu_password',
                stu_fname = '$stu_fname',
                stu_lname = '$stu_lname'
            WHERE stu_id = '$id'";
    
    $result = mysqli_query($connect, $sql);

    if($result){
        header('Location: index.php');
    }
    else{
        echo mysqli_error($connect);
    }
?>