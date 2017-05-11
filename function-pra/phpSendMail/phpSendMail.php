<?php

if(isset($_POST["sendmail"]) && ($_POST["sendmail"] == "true")){

	$mailFrom="=?UTF-8?B?" . base64_encode($_POST["fromname"]) . "?= <".$_POST["frommail"].">";

	$mailto="zxdfgcv@gmail.com";

	$mailSubject="=?UTF-8?B?" . base64_encode($_POST["mailsubject"]). "?=";

	$mailHeader="From:".$mailFrom."\r\n";

	$mailHeader.="Content-type:text/html;charset=UTF-8";

	mail($mailto,$mailSubject,$_POST["mailcontent"],$mailHeader);

}

?>

<head>
	<meta charset = "UTF-8" />
	<title>haoye</title>
	<script type = "text/javascript" src = "js/main.js"></script>
	<link rel = stylesheet type = "text/css" href = "css/main.css">
	<link rel = "stylesheet" href = "css/bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Haoye</title>
</head>
	<body style = "bg-color">
	<div>
			<br />
			<h1>PHP Send Mail</h1>
			<br />
			<br />

	<?php if(isset($_POST["sendmail"]) && ($_POST["sendmail"]=="true")){?>
		寄送成功，<a href="phpSendMail.php">再寄一次</a>。
		<?php }else{?>
		<form name="form1" method="post" action="">
		<table border="0" cellpadding="4" cellspacing="0">
			<tr>
				<td>寄件人姓名</td>
				<td><input type="text" name="fromname" class = "btn-text" id="fromname"></td>
			</tr>
			<tr>
				<td>寄件人郵件</td>
				<td><input type="text" name="frommail" class = "btn-text" id="frommail"></td>
			</tr>
    
			<tr>
				<td>主旨</td>
				<td><input type="text" name="mailsubject" class = "btn-text" id="mailsubject"></td>
			</tr>
			<tr>
				<td colspan="2"><textarea name="mailcontent" id="mailcontent" class = "btn-mtext" cols="45" rows="5"></textarea></td>
			</tr>
			<tr>
				<td colspan = "2"><input type = "submit" name = "button" id = "button"  class = "btn btn-primary btn-wdt" value = "送出">
				<input name = "sendmail" type = "hidden" id = "sendmail" value = "true"></td>
			</tr>
		</table>
		</form>
		<?php }?>

	</div>
	</body>
</html>

