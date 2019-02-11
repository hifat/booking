<?php
    include('php/config.php');

    //ตรง $_SESSION[''] ใส่ให้ตรงกับ SESSION ที่เก็บ id เช่น $_SESSION['stu_id']
    //ถ้าอ่านแล้วลบ comment ทิ้งด้วย

    //       $_SESSION['ไอดีนักศึกษา']       $_SESSION['ไอดีพนักงาน']
    if(isset($_SESSION['stu_id']) || isset($_SESSION['emp_id'])){
        
        // $sql = "SELECT * FROM ชื่อตารางหนังสือ";
        $sql = "SELECT * FROM book";
        $result = mysqli_query($connect, $sql);

    }
    else{
        header('Location: login.php');
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
            <td>รหัสหนังสือ</td>
            <td>ชื่อหนังสือ</td>
            <td>สถานะ</td>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row['book_id'] ?></td> <!-- $row['ชื่อฟิลด์ใน Database'] -->
            <td><?php echo $row['book_name'] ?></td> <!-- $row['ชื่อฟิลด์ใน Database'] -->
            <td><?php echo $row['book_status'] ?></td> <!-- $row['ชื่อฟิลด์ใน Database'] -->
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>