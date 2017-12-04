<?
// ----------------------------конфигурация-------------------------- //

header("Content-Type: text/html; charset=utf-8");

$adminemail=$_POST['admin_email'];  // e-mail админа

$project_name=$_POST['project_name'];  // e-mail админа

$form_subject=$_POST['form_subject'];  // e-mail админа


$date=date("d.m.y"); // число.месяц.год

$time=date("H:i"); // часы:минуты:секунды

$backurl="http://рф-игра.рф";  // На какую страничку переходит после отправки письма

//---------------------------------------------------------------------- //



// Принимаем данные с формы

$name=$_POST['name'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$city=$_POST['adress'];


// Проверяем валидность e-mail

if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is",
strtolower($email)))

 {

  echo
"<center>Вернитесь <a
href='javascript:history.back(1)'><B>назад</B></a>. Вы
указали неверные данные!";

  }

 else

 {


$msg="


<p>Имя: $name</p>

<p>E-mail: $email</p>

<p>телефон: $phone</p>

<p>город: $city</p>


";

$user_message = "<p>Ваша заявка принята и находится на рассмотрении.</p>
<p>В ближайшее время мы с вами свяжемся. Будьте на связи!</p>

<p>Федерация - играй в свою Страну!</p>";


 // Отправляем письмо админу

mail("$adminemail", "$date $time Сообщение от $project_name", "$msg");

mail("$email", "$date $time Сообщение от $project_name", "$user_message");



// Сохраняем в базу данных

$f = fopen("message.txt", "a+");

fwrite($f," \n $date $time Сообщение от $name");

fwrite($f,"\n $msg ");

fwrite($f,"\n ---------------");

fclose($f);



// Выводим сообщение пользователю

print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 600);
//--></script>

$msg

<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";
exit;

 }

?>
