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
                      <a class="nav-link " href="!select_product.php">สินค้า</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="!select_Promotion.php">โปรโมชั่น</a>
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
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Invoice SET Iid='$_GET[Iid]',CustomerID='$_GET[CustomerID]',CartID='$_GET[CartID]'
 WHERE Iid='$_GET[Iid]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='select.php'>กลับสู่หน้าหลัก</a>";
}
?>
</html>