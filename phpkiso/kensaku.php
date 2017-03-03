<!doctype html public"-//w3c//dtd html 4.01 transitional//en">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>php基礎</title>
</head>
<body>
  <?php
  $code=$_POST['code'];
$dsn='mysql:dbname=phpkiso;host=localhost';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql='SELECT*FROM anketo WHERE code='.$code;
$stmt=$dbh->prepare($sql);
$stmt->execute();

while(1)
{
  $rec=$stmt->fetch(PDO::FETCH_ASSOC);
  if($rec==false)
  {
    break;
  }
  echo$rec['code'];
  echo$rec['nickname'];
  echo$rec['email'];
  echo$rec['goiken'];
  echo'<br/>';
}

$dbh=null;
?>
</body>
</html>
