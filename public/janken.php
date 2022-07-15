<?php
require_once "../dbconnect.php";
session_start();
// var_dump($_SESSION);

$hands = array("グー","チョキ","パー");

$r = array_rand($hands);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん</title>
</head>
<body>
    <h1>＜ミニゲーム＞</h1><h3>じゃんけん(対ロボット)</h3>
    <?php echo "ログイン中：".$_SESSION['login_user']['name']; ?>
    <form action="#" method="post">
        <p>どれを出す？</p>
        <p>0：グー1：チョキ2：パー</p>
        <input name="number" type="number" min="0" max="2" value="0">
        <input name="btn" type="submit" value="勝負!!!">
    </form><br>

    <?php if(isset($_POST['btn'])): ?>
        <?php $number = $_POST['number']?>
        <?php echo "あなたの出した手　：".$hands[$number]; ?><br>

        <?php echo "ロボットの出した手：".$hands[$r]; ?>
    <?php endif; ?><br>
    <?php
        //勝敗の決め方
        $number = filter_input(INPUT_POST, 'number');
        $winorlose = $number - $r;
        if($winorlose == 0){
            echo "結果：あいこ";
        }elseif($winorlose == 1 || $winorlose == -2){
            echo '結果：負け';
        }elseif($winorlose == 2 || $winorlose == -1){
            echo '結果：勝ち';
        }
    ?><br>
    <a href="event.php">ログアウト</a>
</body>
</html>