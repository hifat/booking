<?php
    include('php/config.php');
    
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
            <td><a href="member/index.php">ข้อมูลสมาชิก</a></td>
        </tr>
    </table>
</body>
</html>