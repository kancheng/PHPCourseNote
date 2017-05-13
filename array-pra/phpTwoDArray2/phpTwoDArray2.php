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
echo "學號 : " . $student[3]['sid'] . " <br />";
echo "姓名 : " . $student[3]['name'] . " <br />";
echo "性別 : " . $student[3]['gender'] . " <br />";
echo "生日 : " . $student[3]['birthday'] . " <br />";
echo "電話 : " . $student[3]['phone'] . " <br />";

?>
