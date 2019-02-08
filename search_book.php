<?php
    include('php/config.php');

    if(isset($_SESSION['stu_id']) || isset($_SESSION['adm_id'])){
        
        $sql = "SELECT * FROM book"; //ชื่อตาราง
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
            <td><?php echo $row['book_id'] ?></td> <!-- ชื่อฟิลด์ใน Database -->
            <td><?php echo $row['book_name'] ?></td>
            <td><?php echo $row['book_status'] ?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>