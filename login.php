<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="style_bar.css">
    <link rel="stylesheet" href="style_login.css">
    <style>
        input {
            transition: all .5s ease 0s;
        }
         input:hover {
            width: 93%;
         }
         input:focus {
            width: 93%;
         }
    </style>
</head>
<body>
    <header>
        <h3 class="logo" style="color: aliceblue;">วิทยาลัยเทคนิคสุรนารี</h3>
        <nav>
            <ul class="nav__links">
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="#">ร้านค้า</a></li>
                <li><a href="#">ข้อมูลผู้ใช้</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>เข้าสู่ระบบ</button></a>
    </header>
 
    <div class="header_log">
        <h2>เข้าสู่ระบบ</h2>
    </div>
    <center>
    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <img class="img_login" src="img/casual-life-3d-boy-sitting-in-front-of-laptop.png">
            <input type="text" name="username" placeholder="Username" autocomplete="off">
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" autocomplete="off">
        </div>
        <div class="input-group">
            <button type="submit" name="log_user" class="btn">ตกลง</button>
        </div>
        <p>ยังไม่ได้เป็นสมาชิก?&nbsp;&nbsp;<a href="register.php" style="color: rgb(0, 8, 255);">ลงทะเบียน</a></p>
    </form>
    </center>

</body>
</html>