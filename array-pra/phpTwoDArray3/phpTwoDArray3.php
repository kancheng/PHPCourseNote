<?php


$sa = array( 'sid' => 101, 'name' => 'Haoye', 'gender' => '男', 
		'birthday' => '1993-09-29', 'phone' => '(03)1234-5678');

$sb = array( 'sid' => 102, 'name' => 'KanCheng', 'gender' => '男', 
		'birthday' => '1994-03-25', 'phone' => '(03)1234-5678');

$sc = array( 'sid' => 103, 'name' => 'Jhen', 'gender' => '男', 
		'birthday' => '1993-09-29', 'phone' => '(03)1234-5678');

$sd = array( 'sid' => 104, 'name' => 'Jeff', 'gender' => '男', 
		'birthday' => '1994-03-25', 'phone' => '(03)1234-5678');

$se = array( 'sid' => 105, 'name' => 'Jun', 'gender' => '男', 
		'birthday' => '1993-09-29', 'phone' => '(03)1234-5678');

$sf = array( 'sid' => 106, 'name' => 'Ken', 'gender' => '男', 
		'birthday' => '1994-03-25', 'phone' => '(03)1234-5678');

$student = array($sa, $sb, $sc, $sd, $se, $sf);
echo "學生資料查詢 : <br />";
echo "學號 : " . $student[5]['sid'] . " <br />";
echo "姓名 : " . $student[5]['name'] . " <br />";
echo "性別 : " . $student[5]['gender'] . " <br />";
echo "生日 : " . $student[5]['birthday'] . " <br />";
echo "電話 : " . $student[5]['phone'] . " <br />";

?>
