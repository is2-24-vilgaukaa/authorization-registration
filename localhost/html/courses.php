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
<span class="bf">Мастер-классы</span> <br>
</div> <br>

<div class="center"><span class="catalogSpan">Вы можете приобрести следующие мастер-классы</span><br></div>

<div class="masterClass">
<table class="masterClassTable">
<tr>
<td><img src="../picture/бисер.jpg"> </td>
<td><img src="../picture/смола.jpg"> </td>
<td><img src="../picture/проволка.jpg"> </td>
<td><img src="../picture/вышивка.jpg"> </td>
<td><img src="../picture/ювелир.jpg"></td>
</tr>

<tr>
<td><span>Бисероплетение</span></td>
<td><span>Работа с эпоксидной смолой</span></td>
<td><span>Плетение из проволки</span></td>
<td><span>Вышивка гладью</span></td>
<td><span>Ювелирная работа</span></td>
</tr>
</table>

</div> <br>

<div class="bluefon"> <br>
<span class="bf">Как работать с эпоксидной смолой?</span> <br>
</div> 

<div class="center">
<div class="smola">
<img src="../picture/смола.png">
</div>
</div> 

<div class="bluefon"> <br>
<span class="bf">Бисероплетение</span> <br>
</div> <br>

<div class="center">
<div class="scheme">
<span class="catalogSpan">Популярные схемы плетения</span><br>    
<a download="../picture/схема1.jpg" href="../picture/схема1.jpg"><img src="../picture/схема1.jpg"></a>
<a download="../picture/схема2.jpg" href="../picture/схема2.jpg"><img src="../picture/схема2.jpg"></a> 
</div>
</div>

<div class ="center">
<span class="catalogSpan">Стало интересно? Тогда вы можете записаться на курс</span> <br>  
<div class="recordCourse">
<form action="courses.php" method="post">        
<input class="courseInput" id = "user_name" name="user_name" placeholder="Имя" required> <br>
<input class="courseInput" id = "user_surname" name="user_surname" placeholder="Фамилия" required> <br>
<input class="courseInput" id = "user_patronymic" name="user_patronymic" placeholder="Отчество" required> <br>
<input class="courseInput" id = "user_email" name="user_email" placeholder="Email" required> <br>
<input class="courseInput" id = "user_phone" name="user_phone" placeholder="Номер телефона" required> <br>
<button class="courseButton" onclick = "message_course()">Отправить заявку</button>
</form>

<!--Отправить запись-->
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'database';
$link = mysqli_connect($host, $user, $pass, $name);

if (isset($_POST["user_name"]) && isset($_POST["user_surname"]) && isset($_POST["user_patronymic"])&& isset($_POST["user_email"])  && isset($_POST["user_phone"])) {
$name = mysqli_real_escape_string($link, $_POST["user_name"]);
$surname = mysqli_real_escape_string($link, $_POST["user_surname"]);
$patronymic = mysqli_real_escape_string($link, $_POST["user_patronymic"]);
$email = mysqli_real_escape_string($link, $_POST["user_email"]);
$phone = mysqli_real_escape_string($link, $_POST["user_phone"]);

$sql_courses = "INSERT INTO `registration_for_course` (name_reg, surname_reg, patronymic_reg, email, phone) 
VALUES ('$name', '$surname', '$patronymic', '$email', '$phone')";
if($link->query($sql_courses)) {
$new_url = 'courses.php';
header('Location: '.$new_url);
exit();
} }
?>

<script>
function message_course() {
if (!document.getElementById("user_name").value || !document.getElementById("user_surname").value
|| !document.getElementById("user_patronymic").value || !document.getElementById("user_email").value 
|| !document.getElementById("user_phone").value) {
alert ("Ошибка! Не все поля заполнены."); }  
else { alert("Ваша заявка принята. Спасибо что выбираете нас!");} 
}   
</script>

</div>
</div> <br> 


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