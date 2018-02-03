<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>文件详情</title>
	
	<style>
		#left{
			background-color:#fffffc;
			float:left;
			margin-left:50px;
			background:#f8f8f8;
			margin-top:20px;
			}
		#right{
			background-color:#fffffc;
			float:right;
			margin-right:200px;
			}
		fieldset{
			margin: 1em 0;
			padding: 1em;
			border:1px solid #ccc;
			background:#f8f8f8;
			}
		legend{
			font-weight:bold;
			}
			
	</style>
	</head>
	<body>
		<div id="left"> 
		<table border="1" id=>
			<tr>
				<td>文件名</td>
				<td>文件大小</td>
				<td>文件上传时间</td>
				<td>功能</td>

			</tr>
		<?php if(is_array($file)): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$each): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($each["filename"]); ?></td>
				<td><?php echo ($each["filesize"]); ?>M</td>
				<td><?php echo (date("Y-m-d H:i:s",$each["filetime"])); ?></td>
				<td><a href=<?php echo ($each["href"]); ?>>下载</a><a href="delfile/<?php echo ($each["filename"]); ?>" target="_blank">删除</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		</div>
		<div id="right">
		
		<p>上传成功后刷新即可查看</p>
		<fieldset>
			<legend>请在此处上传文件</legend>
		<form action="upload" enctype="multipart/form-data" method="post">
			<input type="file" name="file_doc"/>
			<input type="submit" value="提交">
		</form>
		</fieldset>
		</id>
	</body>
</html>