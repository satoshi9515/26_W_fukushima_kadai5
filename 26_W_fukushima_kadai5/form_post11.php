 <?php
//1. 必ず”session_start(); ”関数を最初に実行！！
session_start();
//2. SESSION変数に値を代入！！

$aa =$_SESSION["count"];
$addpoint =$_SESSION["addpoint"];
if(isset($_POST['aa'])){
  $aa++;
}
$aaa = $aa;

$a =$_SESSION["count"];

?> 



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>フォーム：GET</title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="sample.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                pause: 5000,
            });
        });
  //       var today = new Date();
  // let ttoday = today.getFullYear() + "/" +  today.getMonth() + 1 + "/"+ today.getDate();
  // console.log(ttoday);
  // $(".ttdate").html(ttoday);
</script>


</head>
<body>
<div class="header">
  <div><img src="img/logo.png" alt=""> </div>
  <ul class="header-menu">
    <li>新規登録</li>
    <li>会員ページ</li>
    <li>遊び一覧</li>
    <li>融資一覧</li>
    <li>返済</li>
    <li>各種設定</li>
  </ul>
</div>

<div id="container"> <!-- コンテナ -->
  <div id="itemA">
    <div>遊びメニュー一覧</div>
    <ul>
      <li>じゃんけん</li>
      <li>競馬</li>
      <li>競輪</li>
      <li>パチンコ</li>
      <li>カジノ</li>
    </ul>
    <div>融資一覧</div>
      <ul>
        <li>現金</li>
        <li>ビットコイン</li>
        <li>質屋紹介</li>
      </ul>
  </div> <!-- アイテム -->

  <div id="itemB">
   <div class="main-container"> 
      <form method="post" action="form_post22.php">
        <div class="ttdate"></div>
        <div>ウシジマくんじゃんけん<?=$aaa?>回目</div>
        <p>お名前:<input type="text" name="name" size="20"></p>
        <p>あなたの手を選択する
        <select name="own_hand">
            <option value="1">ぐー</option>
            <option value="2">ちょき</option>
            <option value="3">ぱー</option>
            <input type="hidden" name="addpoint" value="<?=$addpoint?>">
            <p><input type="submit" value="いざ勝負！" name="plus"></p>
         </select></p>
      </form>
      <div>現在の勝ち点は<?=$addpoint?>点</div>
    </div> <!-- アイテム -->
  </div>
  <div id="itemC">
    <div>バナー広告</div>
    <div class="slider">
        <img src="img/ushi1.jpg" width="70px" height="200px" alt="">
        <img src="img/sidephoto.png" width="70px" height="200px" alt="">
        
    </div>

  </div> <!-- アイテム -->
</div>





</body>
</html>
