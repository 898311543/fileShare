<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>添加用户</title>
	</head>
	<body>
		<form method="post" action="__URL__/add">
		<li>姓名：<input type="text" name="user" id="user_name" value="" size="30"/></li>
		<li>电子邮件：<input type="text" name="email" id="user_email" value="" size="30"/></li>
		<input type="submit" value="提交"/>
		</form>
	</body>
</html>