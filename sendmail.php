<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>mailフォーム(送信完了)</title>
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

	// もしセッション変数に情報がない場合の処理
	if(empty($_SESSION)){
		// header関数を用いてエラーファイルへのheader情報を送信する
		header("location: error.php");
		// header情報送信後の処理を実行しないように終了させる	
		exit();
	}

	// メール送信処理
	// メールヘッダー作成

	// 顧客向けメール本文ヘッダー作成
	// 管理者向けメール本文ヘッダー作成
	// 共通メール本文作成
	// 顧客向けメール本文フッター作成
	// 管理者向けメール本文フッター作成
	// 顧客向けメール送信処理
	// 管理者向けメール送信処理

?>
<body>
<h1>Mail(送信完了)</h1>
<p>下記内容でメールを送信しました。</p>
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
<a href="./index.php" class="btn btn-default">メールフォームへ</a>
</body>
<?php

	/***********/
	/* 事後処理 */
	/***********/

	// セッション変数初期化
	$_SESSION = array();

	// セッション破棄
	session_destroy();
?>
</html>