<?php
    include('../php/config.php');

    //ตรง $_POST[''] ใส่ค่าให้ตรงกับ name ใน input
    //ถ้าอ่านแล้วลบ comment ทิ้งด้วย

    $stu_id = $_POST['stu_id'];
    $stu_password = $_POST['stu_password'];
    $stu_fname = $_POST['stu_fname'];
    $stu_lname = $_POST['stu_lname'];

    $sql = "INSERT INTO student (stu_id, stu_password, stu_fname, stu_lname)
                        VALUES('$stu_id', '$stu_password', '$stu_fname', '$stu_lname')";
                        
    $result = mysqli_query($connect, $sql);

    if($result){
        header('Location: index.php');
    }
    else{
        echo mysqli_error($connect);
    }
?>