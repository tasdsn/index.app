<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<title>計算結果</title>
</head>
<body>
<?php if ($_GET): ?>
<h1><?php echo $_GET['check']; ?></h1>
<?php echo $_GET['result']; ?>
<?php endif; ?>
<a href='index.php'>もう一度計算する</a>
</body>
</html>

