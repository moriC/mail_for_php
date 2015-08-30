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
<body>
<h1>Mail(確認)</h1>
<div class="form-group">
	<label>Your Name</label>
	<input type="text" class="form-control" placeholder="Name">
</div>
<div class="form-group">
	<label>Email address</label>
	<input type="email" class="form-control" placeholder="Email">
</div>
<div class="form-group">
	<label>Your Message</label>
	<textarea class="form-control" rows="3" placeholder="Message"></textarea>
</div>
<a href="./index.php" class="btn btn-default">修正</a>
<a href="./sendmail.php" class="btn btn-primary">送信</a>
</body>
</html>