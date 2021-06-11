<?php

session_start();
$a = 0;

if(isset($_POST['plus'])){
    $a =$_SESSION["count"];
    $a++;
}
$_SESSION["count"]=$a;
$aa =$_SESSION["count"];



if(isset($_POST["own_hand"])) {
    // セレクトボックスで選択された値を受け取る
    $own_hand = $_POST["own_hand"];
  

  }
$name = $_POST["name"];
$your_hand = mt_rand(1,3);

if($own_hand==1){
    $ownhand = "【ぐー】";
    }elseif($own_hand==2){
    $ownhand = "【ちょき】";
    }else{
    $ownhand = "【ぱー】";
}

if($your_hand==1){
    $yourhand = "【ぐー】";
    }elseif($your_hand==2){
    $yourhand = "【ちょき】";
    }else{
    $yourhand = "【ぱー】";
}

        
if($own_hand==1){
if($own_hand-$your_hand==-1){
    $judge = "勝ち";
    $judgepoint =3;

    }elseif($own_hand-$your_hand==-2){
        $judge = "負け";
        $judgepoint =0;
    }else{
        $judge = "あいこ";
        $judgepoint =1;
    }
}else if($own_hand==2){

if($own_hand-$your_hand==-1){
    $judge = "勝ち";
    $judgepoint =3;
    }elseif($own_hand-$your_hand==1){
        $judge = "負け";
        $judgepoint =0;
    }else{
        $judge = "あいこ";
        $judgepoint =1;
    }
}
$_SESSION["point"]=$judgepoint;
$point =$_SESSION["point"];

if(isset($_POST["addpoint"])) {
    // セレクトボックスで選択された値を受け取る
    $daddpoint = $_POST["addpoint"]+$point;
    $_SESSION["addpoint"]=$daddpoint;
    $addpoint =$_SESSION["addpoint"];
  

  }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="sample.css">
    <title>Document</title>
</head>
<body>
<div class="header">
    <div><img src="img/logo.png" alt=""> </div>
    <ul class="header-menu">
        <li>新規登録</li>
        <li>会員ページ</li>
        <li>各種設定</li>
    </ul>
</div>

<div class="main-container"> 
    <div><?= htmlspecialchars($aa, ENT_QUOTES); ?>回戦</div>
    <div>お名前:<?= htmlspecialchars($name, ENT_QUOTES); ?></div>
    <div>あなたの手は:<?= htmlspecialchars($ownhand, ENT_QUOTES); ?></div>
    <div>CPの手は:<?= htmlspecialchars($yourhand, ENT_QUOTES); ?></div>
    <div>勝敗は:<?= htmlspecialchars($judge, ENT_QUOTES); ?></div>
    <div>今回のあなたの勝ち点は:<?= htmlspecialchars($judgepoint, ENT_QUOTES); ?></div>
    <div>合計の勝ち点は:<?= htmlspecialchars($addpoint, ENT_QUOTES); ?></div>

    <form method="post"  action="form_post11.php">
    <input type="hidden" name="aa" value="<?=$aa?>">
    <input type="hidden" name="point" value="<?=$point?>">
    <p><input type="submit" value="前のページに戻る" ></p>
</div>


    
    
</body>
</html>