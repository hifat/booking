<?php
    include('php/config.php');

    if(isset($_POST['btn-login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        // $sql = "SELECT * FROM ชื่อตรางพนักงาน WHERE ฟิลด์ที่เก็บไอดี = '".$username."' AND ฟิลด์ที่เก็บพาส = '".$password."' ";
        $sql = "SELECT * FROM employee WHERE emp_id = '".$username."' AND emp_password = '".$password."' ";
        $result = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_assoc($result);

            //ตรง $_SESSION[''] กับ $row[''] ใส่ค่าให้ตรงกับ "ฟิลด์" ใน database
            //ถ้าอ่านแล้วลบ comment ทิ้งด้วย

            //$_SESSION['ชื่อฟิลด์'] = $row['ชื่อฟิลด์']; (จะเก็บไรบ้างก็ ใส่ไปตามนั้น)
            $_SESSION['emp_id'] = $row['emp_id'];
            $_SESSION['emp_fname'] = $row['emp_fname'];
            $_SESSION['emp_lname'] = $row['emp_lname'];

            header('Location: index.php');

        }
        else{
            echo "username หรือ password ผิด";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>

    <h1>เข้าสู่ระบบ</h1>

    <a href="login.php">นักศึกษา</a>

    <form action="" method="post">
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btn-login" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>