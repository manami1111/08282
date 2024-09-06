<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コメント一覧</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #fffaf0;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        table {
            margin: 20px auto;
            background-color: #faebd7;
            width: 100%;
            border: #fad9d6 dotted 5px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4a460;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .form-container {
            margin: 20px auto;
            padding: 20px;
            background-color: #faebd7;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #f4a460;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #e68a3e;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        ini_set('display_errors', "On");


        // セッションを開始する
        session_start();

        //IDとPWの設定
        $valid_id = 'test';
        $valid_pw = 'pass';

        // 入力データの取得
        $id = $_POST["id"];
        $pw = $_POST["pw"];

        // IDとPWの検証
        if ($id === $valid_id && $pw === $valid_pw) {
            // 投稿画面にすすむ
            $_SESSION['authenticated'] = true;
            $_SESSION['user_id'] = $id;

            // 投稿画面にリダイレクトする
            header("Location: form.php");
            exit(); // header()を使用した後は必ずexit()を呼び出す

        } else {
            echo '認証失敗';
            echo '<br><a href = "login.php">再試行</a>';
        }
        ?>


        <div class="form-container">
            <form action="index.php" method="POST">
                <span>投稿者</span>
                <input type="text" name="name" placeholder="投稿者名" required><br>
                <span>本文</span>
                <textarea name="comment" placeholder="本文" required></textarea><br>
                <input type="submit" value="送信">
            </form>
        </div>


    </div>


</body>

</html>