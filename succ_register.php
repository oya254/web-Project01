<?php 
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="style_bar.css">
    <link rel="stylesheet" href="style_login.css">
    <style>
        p {
            font-size: 30px;
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <h3 class="logo" style="color: aliceblue;">วิทยาลัยเทคนิคสุรนารี</h3>
        <nav>
            <ul class="nav__links">
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
        <a href="login.php"><button>เข้าสู่ระบบ</button></a>
    </header>
    

    <div class="homecontent">
        
        <!-- logged in user information -->
        <div class="content_success_register">
        <?php if (isset($_SESSION['username'])) : ?>
            <p>ยินดีต้อนรับ <strong><?php echo $_SESSION['username']; ?></strong></p>
            <br>
            <img src="img/shine-camping-with-tent-and-campfire-1.png" >
            <br>
            <button type="submit"  name="" class="btn"><a href="login.php">เข้าสู่ระบบ</button>
        <?php endif ?>
        </div>
    </div>

</body>
</html>