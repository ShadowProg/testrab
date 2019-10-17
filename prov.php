<?php

	if (!$link = mysqli_connect('localhost', 'test', '1818', 'test')) 
    { echo 'Ошибка подключения к серверу';
	exit;
	};
	mysqli_set_charset($link, "utf8");

	$log = $_POST['log'];
	$pass = $_POST['pass'];
	$fam = $_POST['fam'];
	$imya = $_POST['imya'];
	$oth = $_POST['oth'];
	
	$idm = mysqli_query($link, "SELECT MAX(id) AS id FROM user");
	$idr = mysqli_fetch_row($idm);
	$id = $idr[0] + 1;
	
	$t1 = mysqli_query($link, "SELECT log, pass FROM user WHERE log LIKE '{$log}' and pass LIKE '{$pass}'");
	$t2 = mysqli_num_rows($t1);
	
	if ($t2 > 0)
{
	echo '<HTML>
     <HEAD>
     <TITLE>Проверка</TITLE>
     <META HTTP-EQUIV="Refresh" CONTENT="7; URL=zapis.php">
     </HEAD>
     <BODY>
     <h1>Данные по этому пользователю уже существуют. Через 7 сек. будете направлены назат</h1>
     </BODY>
     </HTML>';
}
else
{
$sql = "INSERT INTO user (id, log, pass, fam, imya, oth)
VALUE ('$id', '$log', '$pass', '$fam', '$imya', '$oth') ";
$result = mysqli_query($link, $sql);
echo '<HTML>
     <HEAD>
     <TITLE>Проверка</TITLE>
     <META HTTP-EQUIV="Refresh" CONTENT="7; URL=spisok.php">
     </HEAD>
     <BODY>
     <h1>Данные введены правильно. Через 7 сек. вы будете перенаправлены на страницу с таблицей.<h1>
     </BODY>
     </HTML>';
};
exit;
?>