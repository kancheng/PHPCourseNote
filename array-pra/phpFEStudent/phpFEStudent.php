<?php

$student = array(
	array( 'sid' => 101, 'name' => 'Haoye', 'gender' => '男', 
		'birthday' => '1993-09-29', 'phone' => '(03)1234-5678'),
	array( 'sid' => 102, 'name' => 'KanCheng', 'gender' => '男', 
		'birthday' => '1994-03-25', 'phone' => '(03)1234-5678'),
	array( 'sid' => 103, 'name' => 'Jhen', 'gender' => '男', 
		'birthday' => '1993-09-29', 'phone' => '(03)1234-5678'),
	array( 'sid' => 104, 'name' => 'Jeff', 'gender' => '男', 
		'birthday' => '1994-03-25', 'phone' => '(03)1234-5678'),
	array( 'sid' => 105, 'name' => 'Jun', 'gender' => '男', 
		'birthday' => '1993-09-29', 'phone' => '(03)1234-5678'),
	array( 'sid' => 106, 'name' => 'Ken', 'gender' => '男', 
		'birthday' => '1994-03-25', 'phone' => '(03)1234-5678')
	);

		echo "學生資料查詢 : <br />";

	foreach ($student as $sdata) {

		echo "學號 : " . $sdata['sid'] . ", ";
		echo "姓名 : " . $sdata['name'] . ", ";
		echo "性別 : " . $sdata['gender'] . ", ";
		echo "生日 : " . $sdata['birthday'] . ", ";
		echo "電話 : " . $sdata['phone'] . " <br />";

	}

?>
