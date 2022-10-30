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
                        <a class="nav-link active" href="!select_Customer.php">ลูกค้า</a>
                    </li>
              </header>
              <center><span class="badge bg-primary">connection Complete</span><br><br>
<form action="!insert_successCus.php" method="GET">
<p>
<label for="CustomerID">รหัสสินค้า  </label>
<input type="text" name="CustomerID" id="CustomerID" value=""/>
</p>
<p>
<label for="CustomerName">ชื่อ-นามสกุล  </label>
<input type="text" name="CustomerName" id="CustomerName" value=""/>
</p>
<p>
<label for="Locations">ที่อยู่ </label>
<input type="text" name="Locations" id="Locations" value="" />
</p>
<p>
<label for="Email">Email </label>
<input type="text" name="Email" id="Email" value="" />
</p>
<p>
<label for="DateOfBirth">วันเกิด </label>
<input type="date" name="DateOfBirth" id="DateOfBirth" value="" />
</p>
<p>
<label for="CDate">C_Date </label>
<input type="date" name="CDate" id="CDate" value="" />
</p>
<p>
<label for="ModDate">Mod_Date </label>
<input type="date" name="ModDate" id="ModDate" value="" />
</p>
<p>
<label for="Postcode">รหัสไปรษณีย์</label>
<input type="text" name="Postcode" id="Postcode" value="" />
</p>
<p>
    <input type="submit">
</p>
</center>
</form>
</body>
</html>