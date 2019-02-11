<?php
    include('../php/config.php');

    $id = $_GET['id']; //บันทัดนี้ห้ามลบ *ไม่ต้องแก้*

    //ตรง $_POST[''] ใส่ค่าให้ตรงกับ name ใน input หน้า form_update.php
    //ถ้าอ่านแล้วลบ comment ทิ้งด้วย

    // ในฟอร์มมีไรบ้างใส่มาให้หมด

    // $nameในinput = $_POST['nameในinput'];

    $stu_id = $_POST['stu_id'];
    $stu_password = $_POST['stu_password'];
    $stu_fname = $_POST['stu_fname'];
    $stu_lname = $_POST['stu_lname'];

    // $sql = "UPDATE ชื่อตาราง 
    //         SET ฟิลด์1 = '$stu_id',
    //             ฟิลด์2 = '$stu_password',
    //             ฟิลด์3 = '$stu_fname',
    //             ฟิลด์4 = '$stu_lname'
    //         WHERE ฟิลด์ที่เก็บไอดี = '$id'";   //ตรง '$id' ไม่ต้องแก้

    // รับข้อมูลมาเท่าไหร่จำนวนฟิลด์ก็ตามนั้น

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