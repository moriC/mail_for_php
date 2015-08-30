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
<body>
<h1>Mail</h1>
<form action="confirm.php" method="post">
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
<button type="submit" class="btn btn-default">確認</button>
</form>
</body>
</html>