<?php
	$mysqli = new mysqli("localhost","root","898311543","information_collect");
header("Content-Type:text/html; charset=utf-8");
if(mysqli_connect_error()){
	printf("Connect failed:%s\n",mysqli_connect_error());
	exit();
}
$mysqli->query("set names utf8");

$query = "select * from sam_information order by rand() LIMIT 10";
$result=$mysqli->query($query);
echo "<table wilth='80%' border=1 aligin='center' cellpadding=5 cellspace=0>";
echo "<tr aligin='center'><td>用户名</td><td>姓名</td><td>密码</td></tr>";
while($row = $result->fetch_array(MYSQLI_BOTH)){
	echo '<tr aligin="center">';
	printf("<td>%s</td>",$row['username']);
	printf("<td>%s</td>",$row['COL 2']);
	printf("<td>%s</td>",$row['COL 68']);
}
$result->free();
$mysqli->close();
