<!DOCTYPE html>
<html>
<head>
<title>フォーム</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head>
<body>
  <div data-role="page" id="p-form-submit-receive">
    <div data-role="header">
      <h2>フォームの基本</h2>
    </div>
    <div data-role="content">
      <h3>フォームの内容を受信</h3>
      <?php
        $username = $_POST['username'];
        print ("<p>あなたの名前：$username </p>");
      ?>
    </div>
    <div data-role="footer">
      <h2>フッタ</h2>
    </div>
  </div>
</body>
</html>
