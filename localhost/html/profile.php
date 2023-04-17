<html>
<head>
<meta charset="utf-8">   
<link rel="icon" href="../picture/logotip.svg">
<link rel = "stylesheet" href="../style/style.css">
<link rel = "stylesheet" href="../style/mediastyle.css">
<link rel = "stylesheet" href="../style/registratiastyle.css">
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
<span class="bf">Добро пожаловать на сайт</span> <br>
</div> <br>

<!--АВТОРИЗАЦИЯ-->

<div class="login-wrap">
<div class="login-html">
<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Войти</label>
<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Регистрация</label>

<div class="login-form">
<div class="sign-in-htm">

<form action="profile.php" method="post">     
<div class="group">
<input type="text" id="login" name = "login" class="input" placeholder="Введите логин" required>
</div>

<div class="group">
<input type="password" id="pass" name = "pass" class="input" type="password" placeholder="Введите пароль" required>
</div>

<div class="group">
<input type="submit" onclick="message_logon()" class="button" value="Войти">
</div>

<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'database';
$link = mysqli_connect($host, $user, $pass, $name);

if (isset($_POST["login"]) && isset($_POST["pass"])) {
$login = mysqli_real_escape_string($link, $_POST["login"]);
$_SESSION['login'] = $login;
$pass = mysqli_real_escape_string($link, $_POST["pass"]);

$sql_logon = "SELECT * FROM `user_registration`";
if($result = $link->query($sql_logon)) {

if($bd_login != $login || $bd_pass != $pass) {echo "Неверный логин или пароль ";}

foreach($result as $row) {
$bd_login = $row['login'];
$bd_pass = $row['password'];

if($bd_login == $login && $bd_pass == $pass) {
$new_url = 'user_profile.php'; 
header('Location: '.$new_url);
}}}}
?>

<script>
function message_logon() {
if (!document.getElementById("login").value || !document.getElementById("pass").value) {
alert ("Ошибка! Не все поля заполнены.");}  
}   
</script>

</form>
</div>
        
<!--РЕГИСТРАЦИЯ-->
<div class="sign-up-htm">

<form action="profile.php" method="post">
<div class="group">
<input id = "reg_name" name="reg_name" type="text" class="input"
placeholder="Введите имя пользователя" required>
</div>

<div class="group">
<input id = "reg_surname" name="reg_surname" type="text" class="input" 
placeholder="Введите фамилию пользователя" required>
</div>

<div class="group">
<input id = "reg_patronymic" name="reg_patronymic" type="text" class="input" 
placeholder="Введите отчество пользователя" required>
</div>

<div class="group">
<input id="user" name="reg_login" type="text" class="input" 
placeholder="Придумайте логин" required>
</div>

<div class="group">
<input id="password" name = "reg_pass" type="password" class="input" type="password" 
placeholder="Придумайте пароль" required>
</div>

<div class="group">
<input id = "password_replace" name = "reg_pass_replace" type="password" class="input" type="password" 
placeholder="Повторите пароль" required>
</div>

<div class="group">
<input id = "email" name = "reg_email" type="text" class="input" 
placeholder="Введите email" required>
</div>

<div class="group">
<input type="submit" onclick="message()" class="button" value="Зарегистрироваться">
</div>

<?php

if (isset($_POST["reg_name"]) && isset($_POST["reg_surname"]) && isset($_POST["reg_patronymic"]) 
&& isset($_POST["reg_login"]) && isset($_POST["reg_pass"]) && isset($_POST["reg_email"])) {

$regname = mysqli_real_escape_string($link, $_POST["reg_name"]);
$regsurname  = mysqli_real_escape_string($link, $_POST["reg_surname"]);
$regpatronymic = mysqli_real_escape_string($link, $_POST["reg_patronymic"]);
$reglogin = mysqli_real_escape_string($link, $_POST["reg_login"]);
$regpass = mysqli_real_escape_string($link, $_POST["reg_pass"]);
$regemail = mysqli_real_escape_string($link, $_POST["reg_email"]);

$sql_reg = "INSERT INTO `user_registration` (name, surname, patronymic, login, password, email) 
VALUES ('$regname', '$regsurname', '$regpatronymic', '$reglogin', '$regpass', '$regemail')";

if($link->query($sql_reg)) {
$new_url = 'profile.php';
header('Location: '.$new_url);
exit();
} }
?>

<script>
function message() {
if (!document.getElementById("reg_name").value || !document.getElementById("reg_surname").value
|| !document.getElementById("reg_patronymic").value || !document.getElementById("user").value 
|| !document.getElementById("password").value || !document.getElementById("password_replace").value
|| !document.getElementById("email").value) {
alert ("Ошибка! Не все поля заполнены."); }  
else { alert("Вы зарегистрировались на сайте. Войдите в свой профиль");} 
}   
</script>

</form>


</div>
</div>
</div>
</div>



<div class="footer">
<br>
<img class = "sk" src="../picture/log.svg"> <br>
<a href="../html/about_us.html">О нас</a>
<a href="../html/products.html">Товары</a>
<a href="../html/profile.html">Профиль</a>
<a href="../html/delivery.html">Доставка</a>
<a href="../html/courses.html">Курсы</a>
<br>
<img class="icon" src ="../picture/icon1.png"><span>Телефон: +7 951 345 11-16</span>
<img class="icon" src ="../picture/icon2.png"><span>Почта: sokolova@gmail.com</span>
<br><br>
</div>

</body>
</html>