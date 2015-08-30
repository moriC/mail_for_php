<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>mailフォーム(PHP)</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			margin: 20px 20px 20px;
		}
	</style>
</head>
<?php

	// セッションデバッグ関数記述ファイル読み込み
	require './function_session.php';

	// セッション変数初期化
	$_SESSION = array();

	// セッション処理開始
	session_start();

	// 変数初期化
	isset($_SESSION['name'])?    $name = $_SESSION['name']      : $name = '';
	isset($_SESSION['email'])?   $email = $_SESSION['email']    : $email = '';
	isset($_SESSION['message'])? $message = $_SESSION['message']: $message = '';
?>
<body>
<h1>Mail</h1>
<form action="confirm.php" method="post">
	<div class="form-group">
		<label>Your Name</label>
		<input type="text" class="form-control" placeholder="Name" name = "name" value="<?php echo $name; ?>">
	</div>
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="Email" name = "email" value="<?php echo $email; ?>">
	</div>
	<div class="form-group">
		<label>Your Message</label>
		<textarea class="form-control" rows="3" placeholder="Message" name = "message"><?php echo $message; ?></textarea>
	</div>
<button type="submit" class="btn btn-default">確認</button>
</form>
</body>
</html>