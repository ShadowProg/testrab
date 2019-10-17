<?php

	if (!$link = mysqli_connect('localhost', 'test', '1818', 'test')) 
    { echo 'Ошибка подключения к серверу';
	exit;
	};
	mysqli_set_charset($link, "utf8");
	
	$id = $_GET['id'];
	if(!empty($id)){
    $result = mysqli_query($link , "DELETE FROM user WHERE id=".$id.";");
	}
	echo '<HTML>
     <HEAD>
     <TITLE>Удаление</TITLE>
     <META HTTP-EQUIV="Refresh" CONTENT="4; URL=spisok.php">
     </HEAD>
     <BODY>
     <h1>Данные удалены. Через 4 сек. будете направлены назат</h1>
     </BODY>
     </HTML>';
	//header("Location: spisok.php");
?>