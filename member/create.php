<?php
    include('../php/config.php');

    //ตรง $_POST[''] ใส่ค่าให้ตรงกับ name ใน input หน้า form_create.php
    //ถ้าอ่านแล้วลบ comment ทิ้งด้วย

    // ในฟอร์มมีไรบ้างใส่มาให้หมด

    // $nameในinput = $_POST['nameในinput'];

    $stu_id = $_POST['stu_id'];
    $stu_password = $_POST['stu_password'];
    $stu_fname = $_POST['stu_fname'];
    $stu_lname = $_POST['stu_lname'];

    // $sql = "INSERT INTO ชื่อตาราง (ชื่อฟิลด์1, ชื่อฟิลด์2, ชื่อฟิลด์3, ชื่อฟิลด์4) ให้ตรงกับใน database
    //                     VALUES('$stu_id', '$stu_password', '$stu_fname', '$stu_lname')"; ใส่ชื่อตัวแปรที่เก็บ $_POST['']

    // รับข้อมูลมาเท่าไหร่จำนวนฟิลด์ก็ตามนั้น

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