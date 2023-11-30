<?php
session_start();
require_once("connect_food.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM food WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_bar.css">
    <link rel="stylesheet" href="style_ป้าแจ๋ว.css">
    <title>ส่วนลดอาหาร</title>
    <style>
    #shopping-cart {
	    margin: 40px;
    }
    #shopping-cart table {
        width: 100%;
        background-color: #F0F0F0;
    }
    #shopping-cart table td {
        background-color: #FFFFFF;
    }
    .txt-heading {
        color: #fff;
        border-bottom: 1px solid #E0E0E0;
        overflow: auto;
    }
    .no-rec {
        color: #fff;
    }
    #btnEmpty {
        background-color: #ffffff;
        border: #d00000 1px solid;
        padding: 5px 10px;
        color: #d00000;
        float: right;
        text-decoration: none;
        border-radius: 3px;
        margin: 10px 0px;
    }
    .btnAddAction {
        padding: 5px 10px;
        margin-left: 5px;
        background-color: #efefef;
        border: #E0E0E0 1px solid;
        color: #211a1a;
        float: right;
        text-decoration: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .clear-float {
        clear: both;
    }
    </style>
</head>
<body style="background-color: #202020;">
<header>
        <h3 class="logo" style="color: aliceblue;">วิทยาลัยเทคนิคสุรนารี</h3>
        <nav>
            <ul class="nav__links">
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="main.php">ร้านค้า</a></li>
                <li><a href="#">ข้อมูลผู้ใช้</a></li>
            </ul>
        </nav>
        <a href="main.php?logout='1'"><button class="btn_logout">ออกจากระบบ</button></a>
    </header>

    <br><br>

    <center>
    <h1 class="h-c">โปรโมชั่นสุดพิเศษ!</h1>
    </center>]

    <br><br>

    <div id="shopping-cart">
<div class="txt-heading">อาหารที่สั่ง</div>

<a id="btnEmpty" href="promotion.php?action=empty">ล้างการสั่งซื้อ</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">รายการ</th>
<th style="text-align:left;">รหัสอาหาร</th>
<th style="text-align:right;" width="5%">จำนวน</th>
<th style="text-align:right;" width="10%">จำนวนอาหาร</th>
<th style="text-align:right;" width="10%">ราคา</th>
<th style="text-align:center;" width="5%">ลบ</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" width="50"/>&nbsp&nbsp<?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "฿ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "฿ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="promotion.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">ทั้งหมด:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "฿ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-rec">ตะกร้าของคุณว่างเปล่า</div>
<?php 
}
?>
</div>
    <center>
    <div class="product">
        <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM food ORDER BY id ASC");
	        if (!empty($product_array)) { 
		        foreach($product_array as $key=>$value){
	    ?>
                <form class="product-item" method="post" action="promotion.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			    <img class="product-img" src="<?php echo $product_array[$key]["image"]; ?>">
                <p style="font-size: 21px;"><?php echo $product_array[$key]["name"]; ?></p><br>
                <p style="font-size: 20px;"><?php echo "฿ ".$product_array[$key]["price"]; ?>&nbsp&nbsp<strike style="color: red;">169.00</strike></p><br>
                <input type="number" class="product-quantity" name="quantity" value="1"/><br><br><input class="1" type="submit" value="สั่งอาหาร" class="btnAddAction" />
			</form>
        <?php
		    }
	    }
	    ?>
    </div>
    </center>
</body>
</html>