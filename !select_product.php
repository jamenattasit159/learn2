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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBProduct";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);

}
echo"<center>"."<span class='badge bg-primary'>connection Complete</span>" ."<br>"."<br>";
$sql = "SELECT  ProductID, ProductName, Price, CDate, ModDate, Deleted  FROM Product";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    echo "<center>"."<div class='card border-primary mb-3' style='max-width: 20rem;'>"."รหัสสินค้า : " ."<a href='!edit_Product.php?ProductID=$row[ProductID]'>".$row["ProductID"]."</a>"."<br>"
        ."ชื่อสินค้า : ".$row["ProductName"]."<br>"
        ."ราคา: ".$row["Price"]."<br>"
        ."วันผลิต : ".$row["CDate"]."<br>"
        ."วันหมดอายุ : ".$row["ModDate"]."<br>"
        ."สถานะ : ".$row["Deleted"]."<br><br><br>"."</center>";
        
    }
    
    
}
    else {
        echo "0 results";
    }
    echo "<center>"."<a class = 'card text-white bg-primary mb-3:center'style='max-width: 15rem' href='!insert_Product.php'>Add New Invoice</a>"."</center>";


    $conn->close();

?>
</html>