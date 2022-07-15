<?php
session_start();

// header("Location:./janken.php");
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー情報</title>
</head>
<body>
    <h1>ユーザー情報</h1>

    <?php if(isset($_SESSION['login_user']['name'])):?>
        <p><?php echo "ユーザー名 : ".$_SESSION['login_user']['name']; ?></p>
        <p><?php echo "　メール　 : ".$_SESSION['login_user']['email']; ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
        <input type="submit" name="logout" value="ログアウト">
    </form>

    <a href="janken.php">じゃんけんへ</a>
    

</body>
</html>