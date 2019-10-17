<?php

	if (!$link = mysqli_connect('localhost', 'test', '1818', 'test')) 
    { echo 'Ошибка подключения к серверу';
	exit;
	};
	mysqli_set_charset($link, "utf8");
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Таблица пользователей</title>
<style type="text/css">
   TABLE {
    width: 96%;
    border-collapse: collapse;
   }
   TD, TH {
    padding: 3px;
    border: 1px solid black;
	text-align: center;
	width: 6%;
	word-break: break-all;
   }
   td.j
   {
	background: #00BFFF;
   }
    td.x
   {
   background: #9fff40;
   }
  </style>
</head>
<body>
<form action="index.html" method="">
	<input type="submit" value="Вернуться на главную" />
</form>
<p></p>
<h3>Список пользователей</h3>
<table>
	<tr>
		<th>Удаление</th>
		<th>Уникальный идентификатор</th>
		<th>Логин</th>
		<th>Пароль</th>
		<th>Фамилия</th>
		<th>Имя</th>
		<th>Отчество</th>
	</tr>
</table>

<?php	
	$sql = "SELECT id, log, pass, fam, imya, oth FROM user";
	$result = mysqli_query($link, $sql);
	
	if (!$result)
	{
		echo 'Ошибка выполнения запроса';
		mysqli_close($link);
		exit;
	};
	
	while ($row = mysqli_fetch_object($result))
	{echo '
			<table>
			<tr>
				<td><a href=\delete.php?id="'.$row->id.'">Удалить</a></td>
				<td>'.$row->id.'</td>
				<td>'.$row->log.'</td>
				<td>'.$row->pass.'</td>
				<td>'.$row->fam.'</td>
				<td>'.$row->imya.'</td>
				<td>'.$row->oth.'</td>
			</tr>';}
echo '</table>';