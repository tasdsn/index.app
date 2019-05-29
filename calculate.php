<?php
if ($_POST) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	//数字かどうかを判定
	if (is_numeric($num1) && is_numeric($num2)) {
		$check = 'You lose';
		$result = '計算結果：' . ($num1 + $num2) . '<br>';
	} elseif (empty($num1) || empty($num1)) {
		$check = 'You lose';
		$result = '何も入れてないのに計算するわけないやろが！！<br>';
	} elseif ($num1 === 'BTC' && $num2 === 'price') {
		//ビットコインの価格を取得
		$url = 'https://api.bitflyer.jp/v1/ticker?product_code=BTC_JPY';
		//接しよんを初期化
		$ch = curl_init();

		//リクエスト先urlをセット
		curl_setopt($ch, CURLOPT_URL, $url);
		//文字列で結果を取得
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//実行結果を返す
		$response = curl_exec($ch);

		//$arrの中にjson形式を配列で取得
		$arr = json_decode($response, true);

		//配列の中のltp（最終取引価格）を取得し、number_formatでカンマをつけて変数に代入
		$result = 'ビットコインの価格は<br>' . number_format($arr['ltp']) . '円<br>';
		//セッションを閉じる
		curl_close($ch);
		$check = 'You win';
	} else {
		$check = 'You lose';
		$result = '計算って言ったら数字入れろや！！<br>';
	}
}
header("Location: result.php?result=" . $result . "&check=" . $check ."");
?>
