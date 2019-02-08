<?php
    include('../php/config.php');

    $sql = "SELECT * FROM student";
    $result = mysqli_query($connect, $sql);

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
    <h1>ข้อมูลสมาชิก</h1>
    <a href="../index.php">เมนู</a>
    <a href="form_create.php">เพิ่ม</a>
    <table>
        <tr>
            <td>รหัสนักศึกษา</td>
            <td>ชื่อ</td>
            <td>ชื่อสกุล</td>
            <td>แก้ไข</td>
            <td>ลบ</td>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row['stu_id'] ?></td>
            <td><?php echo $row['stu_fname'] ?></td>
            <td><?php echo $row['stu_lname'] ?></td>
            <td><a href="form_update.php?id=<?php echo $row['stu_id'] ?>">แก้ไข</a></td>
            <td><a href="delete.php?id=<?php echo $row['stu_id'] ?>">ลบ</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>