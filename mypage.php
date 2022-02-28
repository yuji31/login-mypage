<?php
mb_internal_encoding("utf8");
session_start();

try{
    //try　catch文、DBに接続できなければエラーメッセージを表示
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    }catch(PDOException $e){
        die("<p>申し訳ございません。現在サーバーが混み合っており一時的にアクセスが出来ません。　<br>しばらくしてから再度ログインをしてください。</p>
        <a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>");
    }

    //prepared statementでsql文の型を作る





    //bindValueメソッドでパラメータをセット



    //executeでクエリを実行



    //データベースを切断
    $pdo = NULL;

    //fetch・while文でデータを取得し、sessionに代入


    //データ取得が出来ずに(emptyを使用して判定)sessionがなければ、リダイレクト(エラー画面へ)


    ?>

    <!DOCTYPE HTML>
    <html lang="ja">
        <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
        </head>

        <body>


        </body>
    </html>