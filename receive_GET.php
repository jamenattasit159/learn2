<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="welcome.css">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>ยินดีตอนรับ</title>
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
                  <a class="nav-link" href="3product.php">สินค้า</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.html">โปรโมชั่น</a>
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
                    <a class="nav-link" href="1selectCus.php">ลูกค้า</a>
                </li>
              </header>
    <body >
        <center><div class = "wel">
        <img src="wle11.jpg" width="200px" height="200px"><br><br>
<?php
    
    $user_name = $_GET["fname"];
    $pass_name = $_GET["sname"];
    echo " Your Welcome  $user_name";
   
    
?>
<form action="main.html"><br>
<input type="submit" name ="suname" value = "เข้าสู่เว็บไซต์" class="bbatton">

</form>
</div></center>
</boby>
</html>