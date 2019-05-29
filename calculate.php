<?php
if ($_POST) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	//数字かどうかを判定
	if (is_numeric($num1) && is_numeric($num2)) {
		$result = '計算結果：' . ($num1 + $num2) . '<br>';
	} else {
		$result = '計算って言ったら数字入れろや！！<br>';
	}
}
header("Location: result.php?result=" . $result . "");
?>
