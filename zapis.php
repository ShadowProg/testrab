<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" charset=UTF-8">
<title>Добавление записи</title>  
 <style type="text/css">      
      table {border: 1px solid #ff0000; width: 50%;}
	  th {padding: 5px 5px;}
	  input[type="text"] 
	  {width: 100%;}
   </style> 
</head>
<body>
<form action="index.html" method="">
	<input type="submit" value="Вернуться обратно" />
</form>
<p></p>
<div><h3>Добавление записи. В данной форме не возможно оставить полня незаполненными</h3></div>
		<form action="prov.php" method="post">
<table>
	<tr>
		<th>Логин для регистрации (только на латинице)</th>
		<th>Пароль пароль регистрации (только на лацинице)</th>
		<th>Ваша Фамилия (только на рус.)</th>
		<th>Ваше имя (только на рус.)</th>
		<th>Ваше отчество(если есть, только на рус.)</th>
	</tr>
	<tr>
		<th><input type="text" pattern="^[a-zA-Z]+$" required name="log"></th>
		<th><input type="text" pattern="^[a-zA-Z]+$" required name="pass"></th>
		<th><input type="text" pattern="^[А-Яа-яЁё]+$" required name="fam"></th>
		<th><input type="text" pattern="^[А-Яа-яЁё]+$" required name="imya"></th>
		<th><input type="text" pattern="^[А-Яа-яЁё]+$" name="oth"></th>
	</tr>
</table>
<p></p>
<input type="submit" value="Зарегистрироваться" />
</form>
</body>
</html>