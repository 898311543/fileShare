<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
	</head>
	<body>
		<table width="780" height="107" border="0" cellpadding="1" bgcolor="#cccccc">
			<tr>
				<td height="42" align="center" bgcolor="#ffffff">编号</td>
				<td align="center" bgcolor="#ffffff">用户名</td>
				<td align="center" bgcolor="#ffffff">用户邮箱</td>
				</tr>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td height="42" align="center" bgcolor="#ffffff"><?php echo ($vo["id"]); ?></td>
					<td align="center" bgcolor="#ffffff"><?php echo ($vo["user_name"]); ?></td>
					<td align="center" bgcolor="#ffffff"><?php echo ($vo["user_email"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			</body>
	</html>