<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['member_login'])==false)
{
      print 
      '<div class="user">
      ようこそゲスト様 <br />
      <a href="member_login.html"> 会員ログイン </a><br />
      <br />
      </div>';
}
else
{
      print 'ようこそ';
      print $_SESSION['member_name'];
      print '様';
      print '<a href="member_logout.php"> ログアウト </a><br />';
      print '<br />';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
try
{

$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT code,name,price,gazou FROM mst_product WHERE 1';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$dbh = null;

print 
'<header>
  <div class="heading">
    <h1 class="title">ろくまる農園</h1>
  </div>
  <div class="navbar">
    <ul class="nav-lists">
      <li><a href="shop_cartlook.php"> カートを見る </a></li>
    </ul>
  </div>
</header>';

print
'<div class="contents">
  <div class="upper-content">
    <ul class="info-lists">
      <li><a href="#">会社概要</a></li>
      <li><a href="#">商品一覧</a></li>
      <li><a href="#">お問い合わせ</a></li>
      <li><a href="#">アクセス</a></li>
    </ul>
  </div>
</div>';

print
'<div class="first-view">
  <img src="images/hero.jpg" alt="トップ画面" class="top-image">
</div>';

print
'<div class="middle-contents">
  <h2 style="text-align:center"> 商品紹介</h2>
<div>';
    
while(true)
{

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    // $pro_name=$rec['name'];
    $pro_gazou_name=$rec['gazou'];
    if($rec==false)
    {
              break;
    } 
    $disp_gazou='<img src="images/'.$pro_gazou_name.'">';
    print '<a href="shop_product.php?procode='.$rec['code'].'">';
    print $rec['name'].'---';
    print $rec['price'].'円';
    print '<br />';
    print $disp_gazou;
    print '</a>';
    print '<br />';

}
}

catch (Exception $e)
{
    print 'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}

print
  '<footer>
    <div class="rule">
      <ul class="terms-lists">
        <li><a href="#">ご利用規約</a></li>
        <li><a href="#">個人情報保護方針</a></li>
        <li><a href="#">会社情報</a></li>
        <li><a href="/staff_login/staff_login.html">スタッフ</a></li>
        <li>Copyright(C) Rokumaru-Nouen  ALL RIGHTS RESERVED.</li>
      </ul>
    </div>
  </footer>';

?>

</body>
</html>