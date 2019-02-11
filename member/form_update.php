<?php
    include('../php/config.php');
    
    $id = $_GET['id'];

    // $sql = "SELECT * FROM ชื่อตาราง WHERE ฟิลด์ที่เก็บไอดี = '$id'";

    $sql = "SELECT * FROM student WHERE stu_id = '$id'";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_assoc($result);
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

    <h1>แก้ไขข้อมูล</h1>
    <form action="update.php?id=<?php echo $row['stu_id'] ?>" method="post"> <!-- **บังคับ บรรทัดนี้ให้ใส่ $row['ฟิลด์ที่เก็บไอดี'] เท่านั้น** -->
        <table>
            <!-- ในโจทย์ให้โชว์ไรบ้างก็ใส่ไปตามนั้น -->
            <tr>
                <td>รหัสนักศึกษา</td>
                <td><input type="text" name="stu_id" value="<?php echo $row['stu_id'] ?>"></td> <!-- $row['ชื่อฟิล์ใน database'] -->
            </tr>
            <tr>
                <td>รหัสนักศึกษา</td>
                <td><input type="password" name="stu_password" value="<?php echo $row['stu_password'] ?>"></td> <!-- $row['ชื่อฟิล์ใน database'] -->
            </tr>
            <tr>
                <td>ชื่อ</td>
                <td><input type="text" name="stu_fname" value="<?php echo $row['stu_fname'] ?>"></td> <!-- $row['ชื่อฟิล์ใน database'] -->
            </tr>
            <tr>
                <td>สกุล</td>
                <td><input type="text" name="stu_lname" value="<?php echo $row['stu_lname'] ?>"></td> <!-- $row['ชื่อฟิล์ใน database'] -->
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="บันทึก">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>