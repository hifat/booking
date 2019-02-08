<?php
    include('php/config.php');

    if(isset($_POST['btn-login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM student WHERE stu_id = '".$username."' AND stu_password = '".$password."' ";
        $result = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_assoc($result);

            $_SESSION['stu_id'] = $row['stu_id'];
            $_SESSION['stu_fname'] = $row['stu_fname'];
            $_SESSION['stu_lname'] = $row['stu_lname'];

            header('Location: search_book.php');

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

    <a href="emp_login.php">เจ้าหน้าที่</a>

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