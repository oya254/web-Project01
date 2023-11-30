<?php 

    session_start();
    include('server.php'); 

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายชื่อผู้ลงทะเบียน</title>
    <link rel="stylesheet" href="style_showdata.css">
    <link rel="stylesheet" href="style_bar.css">
    <style>
        h1 {
            color: #fff;
        }
        h1 .h-show {
            position: absolute;
            left: 500px;
        }
    </style>
</head>
<body>
<header>
        <h3 class="logo" style="color: aliceblue;">วิทยาลัยเทคนิคสุรนารี</h3>
        <nav>
            <ul class="nav__links">
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="promotion_admin.php">โปรโมชั่น</a></li>
                <li><a href="showdata.php">รายชื่อผู้ใช้งาน</a></li>
                <li><a href="info_user.php">ข้อมูลแอดมิน</a></li>
            </ul>
        </nav>
        <a href="main.php?logout='1'"><button class="btn_logout">ออกจากระบบ</button></a>
    </header>

    <br>

    
    <div class="container">
        <h1 class="h-show">ข้อมูลแสดงรายชื่อผู้ลงทะเบียน</h1>
        <center>
        <table>
            <thead>
                <tr>
                    <td width="6%">ID</td>
                    <td width="15%">Username</td>
                    <td width="15%">Firstname</td>
                    <td width="15%">Lastname</td>
                    <td width="22%">Gmail</td>
                    <td width="20%">Phone Number</td>
                    <td width="20%">Status</td>
                </tr>
            </thead>
            <tbody class="content-t">
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td>
                            <?php echo $row['id_user']; ?>
                        </td>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                        <td>
                            <?php echo $row['firstname']; ?>
                        </td>
                        <td>
                            <?php echo $row['lastname']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['phone']; ?>
                        </td>
                        <td>
                            <?php echo $row['userlevel']; ?>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        </center>

    </div>
</body>
</html>