<?php

echo "<div style = 'text-align:center'><h1>String</h1><hr />";

if(isset($_POST["passwd"]) && $_POST["passwd"]!=""){

	$passStr = md5( "chiu1030");	
	$inputStr = $_POST["passwd"];
	if(md5($inputStr)==$passStr){
		echo "Passowrd $inputStr Pass.<br />";
		echo "<a href='#' onclick='window.history.back();';>回上一頁</a>";
	}else{
		echo "Password $inputStr Error.<br />";	
		echo "<a href='#' onclick='window.history.back();';>回上一頁</a>";
	}
} else {

?>
	<form action="" name="form1" method="POST">
		Passowrd :
		<input name="passwd" type="password" id="passwd">
		<input type="submit" name="Submit" value="Verify">
	</form>

<?php

}
echo "</div>";
?>