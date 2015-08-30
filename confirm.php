<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>mailフォーム(確認)</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			margin: 20px 20px 20px;
		}
	</style>
</head>
<?php

	// セッション処理開始
	session_start();

	// POSTで処理を受領できているか確認する
	if(!$_POST){
		// header関数を用いてエラーファイルへのheader情報を送信する
		header("location: error.php");
		// header情報送信後の処理を実行しないように終了させる	
		exit();
	}else{
		// POSTで処理を受領できている場合にはセッション変数にPOSTされた情報を格納する
		$_SESSION = $_POST;
	}

?>
<body>
<h1>Mail(確認)</h1>
<p>下記内容でよろしいですか？</p>
<div class="form-group">
	<label>Your Name</label>
	<p class="form-control-static"><?php echo htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8'); ?></p>
</div>
<div class="form-group">
	<label>Email address</label>
	<p class="form-control-static"><?php echo htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8'); ?></p>
</div>
<div class="form-group">
	<label>Your Message</label>
	<p class="form-control-static"><?php echo htmlspecialchars($_SESSION['message'], ENT_QUOTES, 'UTF-8'); ?></p>
</div>
<a href="./index.php" class="btn btn-default">修正</a>
<a href="./sendmail.php" class="btn btn-primary">送信</a>
</body>
</html>