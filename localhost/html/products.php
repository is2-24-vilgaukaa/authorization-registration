<html>
<head>
<meta charset="utf-8">   
<link rel="icon" href="../picture/logotip.svg">
<link rel ="stylesheet" href="../style/style.css">
<link rel ="stylesheet" href="../style/mediastyle.css">
<link rel ="stylesheet" href="../style/animationstyle.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
<title>Sorokina Kristina</title>
</head>
<body>

<!--Шапка-->    
<div class="head">
<a href="../index.php"><img class = "sk" src="../picture/log.svg"></a> <br><br>
<a href="../html/about_us.html">О нас</a>
<a href="../html/products.php">Товары</a>
<a href="../html/profile.php">Профиль</a>
<a href="../html/delivery.html">Доставка</a>
<a href="../html/courses.php">Курсы</a> <br><br>
</div>

<!--Название раздела (новинки)-->
<div class="bluefon">
<br><span class="bf">Новинка "Звездная ночь"</span><br>
</div>

<!--Анимированный слайдер-->
<div class="sliderFon"> <br>
<div class="container_slider">
<img class="photo_slider" src="../picture/picture1.jpg">
<img class="photo_slider" src="../picture/picture2.jpg">
<img class="photo_slider" src="../picture/picture3.jpg">
<img class="photo_slider" src="../picture/picture4.jpg"> 
</div> <br>
</div>

<!--Название раздела (новинки)-->
<div class="bluefon">
<br><span class="bf">Товары</span> <br>
</div> <br>

<!--Категории-->
<div class="divCatalog">
<a href="#earrings"><button class="catalog">Серьги</button></a>
<a href="#pendant"><button class="catalog">Кулоны</button></a>
<a href="#tiara"><button class="catalog">Диадемы</button></a>
<a href="#rings"><button class="catalog">Кольца</button></a>
</div>
</div>

<!--СЕРЬГИ-->
<!--Заголовок-->
<div class="stocks"> <br>
<a name="earrings"><span class="catalogSpan">Серьги</span><br></a>
<table class="stocksTable">

<!--Фото изделия-->   
<tr>
<td><img src="../picture/синие_серьги.jpg"></td>
<td><img src="../picture/кулон_серьги.jpg"></td>
<td><img src="../picture/желтые_серьги.jpg"></td>
</tr>

<!--Подключение к БД--> 
<tr>   
<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'database';
$link = mysqli_connect($host, $user, $pass, $name);
?>       

<!--Об изделии-->   
<?php 
$sql_product = "SELECT * FROM `products` WHERE id = 1 or id = 2 or id = 3";
if ($res = $link->query($sql_product)) {
foreach($res as $row) {
$name = $row['name_product'];
$price = $row['price'];
print("<td>".$name."<br>"."Цена: ".$price." Р "."</td>");
}}
?>
</tr>

<!--Фото изделия-->   
<tr>
<td><img src="../picture/серьги_бусины.jpg"></td>
<td><img src="../picture/каффы.jpg"></td>
<td><img src="../picture/голубые_серьги.jpg"></td>
</tr>

<!--Об изделии-->  
<tr> 
<?php 
$sql_product = "SELECT * FROM `products` WHERE id = 4 or id = 5 or id = 6";
if ($res = $link->query($sql_product)) {
foreach($res as $row) {
$name = $row['name_product'];
$price = $row['price'];
print("<td>".$name."<br>"."Цена: ".$price." Р "."</td>");
}}
?>
</tr>
</table> <br>

<!--КУЛОНЫ-->
<!--Заголовок-->
<a name="pendant"><span class="catalogSpan">Кулоны</span><br></a>
<table class="stocksTable">

<!--Фото изделия-->     
<tr>
<td><img src="../picture/фиолетовый_кулон.jpg"></td>   
<td><img src="../picture/кулон_кит.jpg"></td>  
<td><img src="../picture/кулоны.jpg"></td>  
</tr>

<!--Об изделии-->  
<tr> 
<?php 
$sql_product = "SELECT * FROM `products` WHERE id = 7 or id = 8 or id = 9";
if ($res = $link->query($sql_product)) {
foreach($res as $row) {
$name = $row['name_product'];
$price = $row['price'];
print("<td>".$name."<br>"."Цена: ".$price." Р "."</td>");
}}
?>
</tr>

<!--Фото изделия--> 
<tr>
<td><img src="../picture/кулоны_genshin.jpg"></td>   
<td><img src="../picture/кулоны_смола.jpg"></td>  
<td><img src="../picture/зеленый_кулон.jpg"></td>  
</tr>

<!--Об изделии-->  
<tr> 
<?php 
$sql_product = "SELECT * FROM `products` WHERE id = 10 or id = 11 or id = 12";
if ($res = $link->query($sql_product)) {
foreach($res as $row) {
$name = $row['name_product'];
$price = $row['price'];
print("<td>".$name."<br>"."Цена: ".$price." Р "."</td>");
}}
?>
</tr>
</table> <br>

<!--ДИАДЕМЫ-->
<!--Заголовок-->
<a name="tiara"><span class="catalogSpan">Диадемы</span><br></a>
<table class="stocksTable">

<!--Фото изделия-->
<tr>
<td><img src="../picture/белая_диадема.jpg"></td> 
<td><img src="../picture/рыжая_диадема.jpg"></td>  
<td><img src="../picture/бело-голубая_диадема.jpg"></td>     
</tr>    

<!--Об изделии-->
<tr>
<?php 
$sql_product = "SELECT * FROM `products` WHERE id = 13 or id = 14 or id = 15";
if ($res = $link->query($sql_product)) {
foreach($res as $row) {
$name = $row['name_product'];
$price = $row['price'];
print("<td>".$name."<br>"."Цена: ".$price." Р "."</td>");
}}
?>    
</tr>  
</table><br>
 
<!--КОЛЬЦА-->
<!--Заголовок-->
<a name="rings"><span class="catalogSpan">Кольца</span><br></a>
<table class="stocksTable">

<!--Фото изделия-->
<tr>
<td><img src="../picture/кольцо_с_камнем.jpg"></td> 
<td><img src="../picture/зеленое_кольцо.jpg"></td>  
<td><img src="../picture/парные_кольца.jpg"></td>     
</tr>   

<!--Об изделии-->
<tr>
<tr>
<?php 
$sql_product = "SELECT * FROM `products` WHERE id = 16 or id = 17 or id = 18";
if ($res = $link->query($sql_product)) {
foreach($res as $row) {
$name = $row['name_product'];
$price = $row['price'];
print("<td>".$name."<br>"."Цена: ".$price." Р "."</td>");
}}
?> 
</tr>   
</table>
</div> <br><br>

<!--Подвал-->
<div class="footer"> <br>
<img class = "sk" src="../picture/log.svg"> <br>
<a href="../html/about_us.html">О нас</a>
<a href="../html/products.html">Товары</a>
<a href="../html/profile.html">Профиль</a>
<a href="../html/delivery.html">Доставка</a>
<a href="../html/courses.html">Курсы</a> <br>
<img class="icon"src ="../picture/icon1.png"><span>Телефон: +7 951 345 11-16</span>
<img class="icon"src ="../picture/icon2.png"><span>Почта: sokolova@gmail.com</span> <br><br>
</div>

</body>
</html>