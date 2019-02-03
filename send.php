<html>
<head>
  <title>send</title>
  <meta http-equiv="refresh" content="1;URL=../docs">
</head>
<body>
<?php

$email = $_POST["email"];
$txt = $_POST["text"];
$data = $email."/".$txt;

$mysqli = new mysqli("localhost", "root", "", "kadai");

/* 接続状況をチェックします */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$mysqli->set_charset('utf8');

/* Select クエリを実行します。これは結果セットを返します */
if ($result = $mysqli->query("INSERT Into item values('$data')")) {
}

$mysqli->close();
?>
</body>
</html>