<?php
    include('php/config.php');

    //ตรง $_SESSION['emp_id'] ใส่ให้ตรงกับ SESSION ที่เก็บ id ตรงไฟล์ login.php เช่น $_SESSION['stu_id']
    //ถ้าอ่านแล้วลบ comment ทิ้งด้วย
    
    if(!isset($_SESSION['emp_id'])){
        header('Location: search_book.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <!-- เพิ่มเมนูตรงนี้ -->
            <td><a href="member/index.php">ข้อมูลสมาชิก</a></td>
        </tr>
    </table>
</body>
</html>