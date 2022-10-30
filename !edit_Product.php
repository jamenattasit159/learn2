<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>หน้าฮัก</title>
    </head>
    <header class="top-footer">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                  <a class="nav-link active" href="main.html"><img class="imag" src="logo.jpg" width="50px" ></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                      <a class="nav-link " href="main.html">หน้าหลัก
                        <span class="visually-hidden">(current)</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a class="nav-link active" href="!select_product.php">สินค้า</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="!select_Promotion.php">โปรโมชั่น</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pay.html">ชำระเงิน</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.html">ติดต่อเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.html">ความคิดเห็น</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="price.html">แสดงใบเสร็จ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tables.html">ตารางรายการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="!select_Customer.php">ลูกค้า</a>
                    </li>
              </header>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM Product WHERE ProductID ='$_GET[ProductID]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>
<center>
<form method="GET" action="!edit_successPro.php">
<p>
<label for="ProductID">รหัสใบเสร็จที่จะแก้ไข</label>
<input type="text" name="ProductID" id="ProductID" value="<?=$data['ProductID'];?>"/>
</p>
<p>
<label for="ProductName">รหัสลูกค้าที่ต้องการแก้ไข</label>
<input type="text" name="ProductName" id="ProductName" value="<?=$data['ProductName'];?>"/>
</p>
<p>
<label for="Price">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="text" name="Price" id="Price" value="<?=$data['Price'];?>" />
</p>
<p>
<label for="CDate">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="Date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="Date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<p>
<label for="Deleted">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="text" name="Deleted" id="Deleted" value="<?=$data['Deleted'];?>" />
</p>

<p>
    <input type="submit" value="แก้ไข" >
    <input type="RESET" value="RESET" >
</p>
</center>
</form>

</p>
</html>