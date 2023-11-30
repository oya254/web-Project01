<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link rel="stylesheet" href="style_bar.css">
    <link rel="stylesheet" href="style_login.css">
    <style>
        input {
            transition: all .5s ease 0s;
        }
        input:hover {
            width: 90%;
        }
        input:focus {
            width: 95%;
        }
        .bio input{
            height: 40px;
            width: 163px;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: #F3F3F3;
            outline: none;
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
        <a class="cta" href="login.php"><button>เข้าสู่ระบบ</button></a>
    </header>
    <div class="header_log">
        <h2>ลงทะเบียน</h2>
    </div>
    <center>
    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
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
            <img src="img/casual-life-3d-man-using-laptop-and-talking-on-the-phone.png" width="200">
            <input type="text" name="username" placeholder="Username" required autocomplete="off">
        </div>
        <div class="bio">
            <input type="text" name="firstname" placeholder="Firstname" required autocomplete="off">
            <input type="text" name="lastname" placeholder="Lastname" required autocomplete="off">
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="Gmail" required autocomplete="off">
        </div>
        <div class="input-group">
            <input type="text" name="phone" placeholder="Phone Number" required autocomplete="off">
        </div>
        <div class="input-group">
            <input type="password" name="password_1" placeholder="Passsword" autocomplete="off">
        </div>
        <div class="input-group">
            <input type="password" name="password_2" placeholder="Confirm Password" autocomplete="off">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">ตกลง</button>
        </div>
        <p>เป็นสมาชิกอยู่แล้ว? <a href="login.php" style="color: rgb(0, 8, 255);">เข้าสู่ระบบ</a></p>
    </form>
    </center>

</body>
</html>