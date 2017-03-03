<!doctype html public"-//w3c//dtd html 4.01 transitional//en">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>PHP基礎</title>
</head>
<body>
  <?php
  $nickname=$_POST['nickname'];
  $email=$_POST['email'];
  $goiken=$_POST['goiken'];

  $nickname=htmlspecialchars($nickname);
  $email=htmlspecialchars($email);
  $goiken=htmlspecialchars($goiken);

  if ($nickname=='')
  {
    echo'ニックネームが入力されていません。';
  }
  else
  {
      echo 'ようこそ';
      echo $nickname;
      echo '様';
      echo'<br/>';
  }

  if ($email=='')
   {
    echo 'メールアドレスが入力されていません。<br/>';
  }
  else
   {
    echo'メールアドレス';
    echo $email;
    echo'<br/>';
  }

  if ($goiken=='')
  {
    echo'ご意見が入力されていません。<br/>';
  }
  else
   {
    echo'ご意見『';
    echo$goiken;
    echo'』<br/>';
  }

 if($nickname==''||$email==''||$goiken=='')
  {
    echo'<form>';
    echo'<input type="button" onclick="history.back()" value="戻る">';
    echo '</form>';
  }
  else
    {
  echo'<form method="post" action="thanks.php">';
  echo'<input name="nickname" type="hiddn" value="'.$nickname.'">';
  echo'<input name="email" type="hiddn" value="'.$email.'">';
  echo'<input name="goiken" type="hiddn" value="'.$goiken.'">';
  echo'<input type="button" onclick="history.back()" value="戻る">';
  echo'<input type="submit" value="OK">';
  echo'</form>';
}
?>
</body>
</html>
