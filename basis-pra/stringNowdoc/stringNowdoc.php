<html>
	<head>
			<title>PHP Practice</title>
	</head>
	<body>
		<?php 
			$myLanguage = "PHP";

			/* nowdoc 表示字串 */

			$showStr = <<<'Msg'
						目前用的程式語言 : $myLanguage <br />
						Haoye："It's easy, It's good." 						
Msg;

			echo $showStr; 

	 	?>
	</body>
</html>