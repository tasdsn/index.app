<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<title>トップページ</title>
</head>
<body>
<h1>計算をしましょう</h1>
<form action='calculate.php' method='post'>
<input type='text' name='num1'>+
<input type='text' name='num2'>
<input type='submit' value='計算'>
</form>
<?php for ($i = 0; $i <= 1500; $i++): ?>
<br>
<?php switch ($i): ?>
<?php case '100': ?>
	<?php echo 'T'; ?>
	<?php break; ?>
<?php case '300': ?>
	<?php echo 'B'; ?>
	<?php break; ?>
<?php case '500': ?>
	<?php echo 'C'; ?>
	<?php break; ?>
<?php case '700': ?>
	<?php echo 'c'; ?>
	<?php break; ?>
<?php case '900': ?>
	<?php echo 'p'; ?>
	<?php break; ?>
<?php case '1100': ?>
	<?php echo 'e'; ?>
	<?php break; ?>
<?php case '1300': ?>
	<?php echo 'r'; ?>
	<?php break; ?>
<?php case '1500': ?>
	<?php echo 'i'; ?>
	<?php break; ?>
<?php endswitch; ?>
<?php endfor; ?>
</body>
</html>
