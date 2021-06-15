<?php
$servername = "localhost";
$username = "root";
$password = "";
//Вводим название базы данных
$dbname = "registration";
//Созданиие подключения
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysql_select_db('registration');
if (!$conn) {
 die("Подключение не выполнено: " . mysqli_connect_error());
}
//Строка с текстом sql запроса для таблицы
$sql = "INSERT INTO register_form (login, email, date, number, raion, password, password2, notif)
VALUES ('".$_POST['login']."','".$_POST['email']."',
'".$_POST['date']."', '".$_POST['number']."', 
'".$_POST['raion']."', '".$_POST['password']."',
'".$_POST['password2']."', '".$_POST['notif']."');";
//mysqli_query($conn, $sql)
//Проверка статуса выполнения sql запроса
if (mysqli_query($conn, $sql)) {
 echo "Запись успешно добавлена</br>";
echo "<a href='html4.html'>На главную</a>";
} else {
 echo "Ошибка добавления записи: " . $sql . "<br>" .
mysqli_error($conn);
}
//Закрытие соединения
mysqli_close($conn);
?>
<?php
echo "<h2>Your Input:</h2>";
echo $_POST['login'];
echo "<br>";
echo $_POST['email'];
echo "<br>";
echo $_POST['date'];
echo "<br>";
echo $_POST['number'];
echo "<br>";
echo $_POST['raion'];
echo "<br>";
echo $_POST['password'];
echo "<br>"; 
echo $_POST['password2'];
echo "<br>";
echo $_POST['notif'];
echo "<br>";
?>