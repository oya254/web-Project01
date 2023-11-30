<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

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
    <link rel="stylesheet" href="style_shop.css">
    <style>
        button {
            background-color: rgb(213, 0, 0);
        }
        button:hover {
            background-color: rgba(213, 0, 0, 0.722))
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

    <br><br>

    <center>
        <h1 class="h-c">ร้านอาหารทั้งหมด</h1>
        </center>
        <br>
        <center>
        <div class="product">
            <div class="product-item">
                <img class="product-img" src="https://www.sgethai.com/wp-content/uploads/2022/04/220504-Content-%E0%B9%81%E0%B8%88%E0%B9%88%E0%B8%A7%E0%B8%AE%E0%B9%89%E0%B8%AD%E0%B8%99%E0%B8%88%E0%B8%B4%E0%B9%89%E0%B8%A1%E0%B8%88%E0%B8%B8%E0%B9%88%E0%B8%A1-%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B8%B3%E0%B8%87%E0%B9%88%E0%B8%B2%E0%B8%A2-%E0%B9%86-%E0%B8%AD%E0%B8%A3%E0%B9%88%E0%B8%AD%E0%B8%A2-%E0%B8%9F%E0%B8%B4%E0%B8%99%E0%B8%A2%E0%B8%81%E0%B9%81%E0%B8%81%E0%B9%8A%E0%B8%8702.jpg">
                <br><br>
                <p style="font-size: 21px;"><u>ร้าน แจ่วฮ้อนสารคาม อ.โชคชัย(กระโทก)</u></p>
                <br>
                <p style="font-size: 16px;">309 ตำบล โชคชัย อำเภอโชคชัย นครราชสีมา 30190</p>
                <br>
                <center>
                <div class="cc">
                <button class="btn-food"><a href="#">ดูร้านค้า</a></button>
                </div>
                </center>
            </div>
            <div class="product-item">
                <img class="product-img" src="https://s359.kapook.com/pagebuilder/da52e181-2ff1-48cd-8cb0-54f04057648d.jpg">
                <br><br>
                <p style="font-size: 21px;"><u>ร้าน ป้าแจ๋ว อาหารตามสั่ง</u></p>
                <br>
                <p style="font-size: 16px;">275 หมู่ที่12 โชคชัย อำเภอโชคชัย นครราชสีมา 30190</p>
                <br>
                <center>
                    <div class="cc">
                <button class="btn-food"><a href="food_ป้าแจ๋ว.html">ดูร้านค้า</a></button>
                </div>
                </center>
            </div>
            <div class="product-item">
                <img class="product-img" src="https://d1sag4ddilekf6.azureedge.net/compressed/merchants/3-C24XACCWETDJME/hero/13e1fa87197b4edb83c755140df2153b_1635487744451914036.jpg">
                <br><br>
                <p style="font-size: 21px;"><u>ร้าน อาหารวิเชียร</u></p>
                <br>
                <p style="font-size: 16px;">P5VH+7P6 ถ. โชคชัย-เดชอุดม อำเภอโชคชัย นครราชสีมา 30190</p>
                <br>
                <center>
                    <div class="cc">
                <button class="btn-food"><a href="#">ดูร้านค้า</a></button>
                </div>
                </center>
            </div>
            <div class="product-item">
                <img class="product-img" src="https://reviewchiangmai.com/wp-content/uploads/2014/04/IMG_0853.jpg">
                <br><br>
                <p style="font-size: 21px;"><u>ร้าน ไอติมตาซ้อน</u></p>
                <br>
                <p style="font-size: 16px;">P5MC+5PM ตำบล โชคชัย อำเภอโชคชัย นครราชสีมา 30190</p>
                <br>
                <center>
                    <div class="cc">
                <button class="btn-food"><a href="#">ดูร้านค้า</a></button>
                </div>
                </center>
            </div>
            <div class="product-item">
                <img class="product-img" src="https://scontent.fnak1-1.fna.fbcdn.net/v/t39.30808-6/284138409_3122104428031878_9189772093615745657_n.jpg?stp=dst-jpg_p843x403&_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=NlXmfFf4JCIAX8DEric&_nc_ht=scontent.fnak1-1.fna&oh=00_AfAd1ahJYzeE0_FjPpD9JnqmJNOqqt_xlUjSv3pDr5dFuQ&oe=63647A00">
                <br><br>
                <p style="font-size: 21px;"><u>ร้าน เดอะมิสเตอร์แซ่บ ไทบ้าน</u></p>
                <br>
                <p style="font-size: 16px;">P5P8+H6M ตำบล โชคชัย อำเภอโชคชัย นครราชสีมา 30190</p>
                <br>
                <center>
                <div class="cc">
                <button class="btn-food"><a href="#">ดูร้านค้า</a></button>
                </div>
                </center>
                
            </div>
            <div class="product-item">
                <img class="product-img" src="https://ed.edtfiles-media.com/static-cache/resize-cache/790x528/ud/images/1/134/401554/_MG_1178_Cover.jpg">
                <br><br>
                <p style="font-size: 21px;"><u>ร้าน ขาหมูหินดาด</u></p>
                <br>
                <p style="font-size: 16px;">P5RG+QF6 อำเภอโชคชัย นครราชสีมา 30190</p>
                <br>
                <center>
                <div class="cc">
                <button class="btn-food"><a href="#">ดูร้านค้า</a></button>
                </div>
                </center>
                
            </div>
        </div>
        
        </center>


</body>
</html>