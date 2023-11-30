<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_bar.css">
    <link rel="stylesheet" href="style_ป้าแจ๋ว.css">
    <style>
        .cc button:hover {
            background-color: #bbbb00;
            transition: .3s;
        }
        .cc button {
            transition: .3s;
        }
        a {
            padding: 15px;
        }
        .h-c {
            color: aliceblue;
        }
    </style>
</head>
<body style="background-color: #202020;">
    <header>
        <h3 class="logo" style="color: aliceblue;">วิทยาลัยเทคนิคสุรนารี</h3>
        <nav>
            <ul class="nav__links">
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="promotion.php">โปรโมชั่น</a></li>
                <li><a href="info_user.php">ข้อมูลผู้ใช้</a></li>
            </ul>
        </nav>
        <a href="main.php?logout='1'"><button class="btn_logout">ออกจากระบบ</button></a>
    </header>
    <br>
    <center>
    <h1 class="h-c">ร้าน ป้าแจ๋ว อาหารตามสั่ง</h1>
    </center>
    <br>
    <center>
    <div class="product">
        <div class="product-item">
            <img class="product-img" src="">
            <br><br>
            <p style="font-size: 21px;">แกงเขียวหวาน</p>
            <br>
            <p style="font-size: 20px;">฿ 50</p>
            <br>
            <center>
            <div class="cc">
            <button class="btn-food"><a href="#">สั่งอาหาร</a></button>
            </div>
            </center>
        </div>
        <div class="product-item">
            <img class="product-img" src="https://www.pim.in.th/images/all-side-dish-chicken-egg-duck/korean-fried-chicken/koren-fried-chicken-24.jpg">
            <br><br>
            <p style="font-size: 21px;">ไก่ทอดเกาหลี</p>
            <br>
            <p style="font-size: 20px;">฿ 45 <strike style="color: red;">65</strike></p>
            <br>
            <center>
                <div class="cc">
            <button class="btn-food"><a href="#">สั่งอาหาร</a></button>
            </div>
            </center>
        </div>
        <div class="product-item">
            <img class="product-img" src="https://chillchilljapan.com/wp-content/uploads/2020/10/pixta_63844420_M.jpg">
            <br><br>
            <p style="font-size: 21px;">เนื้อวากิว A5 ย่างถ่านภูเขาไฟ</p>
            <br>
            <p style="font-size: 20px;">฿ 499</p>
            <br>
            <center>
                <div class="cc">
            <button class="btn-food"><a href="#">สั่งอาหาร</a></button>
            </div>
            </center>
        </div>
        <div class="product-item">
            <img class="product-img" src="https://sites.google.com/site/smtaxaharrsleis/_/rsrc/1493919763270/smta-pu-plara/images%20%281%29.jpg">
            <br><br>
            <p style="font-size: 21px;">ตำปูปลาร้า</p>
            <br>
            <p style="font-size: 20px;">฿ 40</p>
            <br>
            <center>
                <div class="cc">
            <button class="btn-food"><a href="#">สั่งอาหาร</a></button>
            </div>
            </center>
        </div>
        <div class="product-item">
            <img class="product-img" src="https://file.aimcontent.co/BrandAge/images/paragraph/16FD8B6-9CFB178-FA3155D.jpg">
            <br><br>
            <p style="font-size: 21px;">น้ำเป๊บซี่</p>
            <br>
            <p style="font-size: 20px;">฿ 15</p>
            <br>
            <center>
            <div class="cc">
            <button class="btn-food"><a href="#">สั่งอาหาร</a></button>
            </div>
            </center>
            
        </div>
    </div>
    
    </center>
</body>
</html>