<html>
<head>
<meta charset="utf-8">       
<link rel="icon" href="../picture/logotip.svg">
<link rel ="stylesheet" href="../style/style.css">
<link rel ="stylesheet" href="../style/mediastyle.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
<title>Sorokina Kristina</title>
</head>
<body>

<div class="head">
<a href="../index.php"><img class = "sk" src="../picture/log.svg"></a> <br><br>
<a href="../html/about_us.html">О нас</a>
<a href="../html/products.php">Товары</a>
<a href="../html/profile.php">Профиль</a>
<a href="../html/delivery.html">Доставка</a>
<a href="../html/courses.php">Курсы</a>
<br><br>
</div>

<div class="bluefon"> <br>
<span class="bf">Профиль</span> <br>
</div> <br>

<div class="center">
<button class="profile_catalog">5% скидка при регистрации</button>
<button class="profile_catalog">5% скидка при первом заказе</button>
<button class="profile_catalog">5% скидка постоянным клиентам</button>
</div> <br>

<div class="center"><span class="catalogSpan">Данные пользователя</span></div>

<table class="user_profile_table">
<tr>
<td><img class="user_img" src="../picture/user.svg"></td>

<td>
<p>Личная информация:</p>    
<?php 
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'database';
$link = mysqli_connect($host, $user, $pass, $name);

$user = $_SESSION['login'];

$sql_search_user = "SELECT * FROM `user_registration`";
if($result = $link->query($sql_search_user)) {
    
foreach($result as $row) {
$name = $row['name'];
$surname = $row['surname'];
$patronymic = $row['patronymic'];  
$email = $row['email']; 

$login = $row['login']; 
if ($user == $login) {
print("<p> ФИО: ".$surname." ".$name." ".$patronymic."</p>"."<p> Почта: ".$email."</p>" );    
}}}
?>
</td>

<td>
<p>Информация о заявках:</p>
<?php 

$sql_course = "SELECT * FROM `registration_for_course` INNER JOIN `user_registration`";
if($result = $link->query($sql_course)) {
    
foreach($result as $row) {
$name = $row['name'];
$surname = $row['surname'];
$patronymic = $row['patronymic']; 

$name_course = $row['name_reg'];
$surname_course = $row['surname_reg'];
$patronymic_course = $row['patronymic_reg'];  
}
if ($name == $name_course) {
print("<p>-</p>");    
}
else {
print("<p>-</p>");      
}
}

?>
</td>

<td><a href="products.php"><img class="basket_img" src="../picture/iconbasket.svg"></a></td>

</tr>
</table> <br>


<div class="footer">
<br>
<img class = "sk" src="../picture/log.svg"> <br>
<a href="../html/about_us.html">О нас</a>
<a href="../html/products.html">Товары</a>
<a href="../html/profile.html">Профиль</a>
<a href="../html/delivery.html">Доставка</a>
<a href="../html/courses.html">Курсы</a>
<br>
<img class="icon"src ="../picture/icon1.png"><span>Телефон: +7 951 345 11-16</span>
<img class="icon"src ="../picture/icon2.png"><span>Почта: sokolova@gmail.com</span>
<br><br>
</div>

</body>
</html>