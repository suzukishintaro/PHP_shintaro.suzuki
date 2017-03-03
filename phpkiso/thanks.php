<!doctype html public"-//w3c//dtd html 4.01 transitional//en">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>php基礎</title>
</head>
<body>
<?php
$dsn='mysql:dbname=phpkiso;host=localhost';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname=htmlspecialchars($nickname);
$email=htmlspecialchars($email);
$goiken=htmlspecialchars($goiken);

echo$nickname;
echo'様<br/>';
echo'ご意見ありがとうございます<br/>';
echo'頂いたご意見『';
echo$goiken;
echo'』<br/>';
echo$email;
echo'にメールを送りましたのでご確認ください。';

$mail_sub='アンケート受け付けました。';
$mail_body=$nickname."様へ\nアンケートご協力ありがとうございました。";
$mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
$mail_head='From:xxx@xxx.co.jp';
mb_language('japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($email,$mail_sub,$mail_body,$mail_head);

$sql='INSERT INTO anketo(nickname,email,goiken)VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;
 ?>
</body>
</html>
