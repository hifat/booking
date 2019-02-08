<?php
    include('../php/config.php');
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

    <h1>เพิ่มข้อมูล</h1>

    <form action="create.php" method="post">
        <table>
            <tr>
                <td>รหัสนักศึกษา</td>
                <td><input type="text" name="stu_id"></td>
            </tr>
            <tr>
                <td>รหัสผ่านนักศึกษา</td>
                <td><input type="password" name="stu_password"></td>
            </tr>
            <tr>
                <td>ชื่อ</td>
                <td><input type="text" name="stu_fname"></td>
            </tr>
            <tr>
                <td>สกุล</td>
                <td><input type="text" name="stu_lname"></td>
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