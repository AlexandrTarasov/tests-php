<?php
$model = $name = $phone = $mail = $form3 = '';
if(isset($_POST['model'])){$model = test_input($_POST['model']);}
$name  = test_input($_POST['name']);
$phone = test_input($_POST['phone']);
$email = test_input($_POST['email']);
$form3 = test_input($_POST['form3dickaunt']);

$error = 0;

if (!preg_match('/^[а-яА-ЯёЁ ]{2,20}$/ui', $name)) {
  echo ("<center><h3>Введите имя русскими буквами</h3></center>");
  $error = 1;
}

if(!preg_match("/^[0-9 -]{7,16}+$/", $phone)){
  echo ("Телефон задан в неверном формате");
  $error=1;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo ("Не верный формат мэйла");
  $error=1;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
