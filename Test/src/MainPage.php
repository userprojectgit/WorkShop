<?php
Error_Reporting(E_ALL & ~E_NOTICE);
header('Content-Type: text/html; charset=windows-1251');
function index(){
	echo '<form class="form" method="post" action="">
	<label for="authentication">���� � ������� ����������!</label>
	<input type = "submit" name = "authentication" value = "��������������">
	</form>';
}
function showPage(){
	echo '<form class="exit" method="post" action="">
	<input type = "submit" name = "exit" value = "����� �� ���������">
	</form>';
	echo '
	<div class="container">
	<h1>������� ����</h1>
	<ul>
	<li><a href="1_2.php">����� ����������</a></li>
	<li><a href="3_2.php">����� �������� ������</a></li>
	<li><a href="2_2.php">���</a></li>
	<li><a href="4_2.php">������� ���������</a></li>
	<li><a href="5_2.php">������� ���������</a></li>
	<li><a href="6_2.php">������� �����</a></li>
	<li><a href="7_2.php">������� ����������</a></li>
	<li><a href="8_2.php">������������ �������</a></li>
	<li><a href="9_2.php">�������� ��������</a></li>
	</ul>
	</div>
	';
}
if($_REQUEST['exit']){
	setcookie('login', $login, time() - 60*30, '/');
	setcookie('password', $password, time() - 60*30, '/');
	header ('Location: index.php'); // ��������������� �� ��������������
}
if($_REQUEST['authentication']){
	header ('Location: index.php'); // ��������������� �� ��������������
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<title>������� ����</title>
		<link rel="stylesheet" type="text/css" href="MainPage.css">
	</head>
	<body>	
<?php 
	if (isset($_COOKIE['login']) && $_COOKIE['password']) showPage();
	else index();
?>
	</body>
</html>