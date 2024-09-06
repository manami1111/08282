

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コメント一覧</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f8f8;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff7f8;
        }
        h1 {
            color: #ff6f61;
            text-align: center;
            margin-bottom: 20px;
        }
        #comments-container {
            margin-bottom: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #f0e8e8;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-body {
            padding: 15px;
        }
        .card-title {
            color: #ff6f61;
            margin: 0 0 10px 0;
            font-size: 1.2em;
        }
        .card-text {
            color: #333;
            margin: 0;
        }
        footer.blockquote-footer {
            font-size: 0.8em;
            color: #999;
            text-align: right;
            margin-top: 10px;
        }
        .form-container {
            text-align: center;
            margin-top: 20px;
        }
        .form-container input[type="submit"] {
            background-color: #ff6f61;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .form-container input[type="submit"]:hover {
            background-color: #e65c5c;
        }
        a {
            text-decoration: none;
            color: #ff6f61;
            font-size: 1em;
            margin-top: 20px;
            display: inline-block;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #e65c5c;
        }

        .edit-delete-buttons {
            position: absolute;
            top: 15px;
            right: 15px;
        }
        .edit-delete-buttons a {
            color: #ff6f61;
            margin-left: 10px;
            text-decoration: none;
            font-size: 0.9em;
        }
        .edit-delete-buttons a:hover {
            color: #e65c5c;
        }
    </style>
</head>

<body>

<?php
// コネクションを開く
$link = mysqli_connect("localhost", "root", "mariadb", "08282" );

// 文字コードを設定
mysqli_set_charset($link, "utf8mb4");

// INSERT文を作る
$sql ="INSERT INTO bbs (name, comment)" . " VALUES(" .
"'" . $_POST["name"] . "'," .
"'" . $_POST["comment"] . "');";

// INSERT文を発行する
mysqli_query($link, $sql);

// コネクションを閉じる
mysqli_close($link);
?>





    <?php
    ini_set('display_errors', "On");

    // コネクションを開く（データベースにログイン）
    $link = mysqli_connect("localhost", "root", "mariadb", "08282");

    // 文字コードを設定
    mysqli_set_charset($link, "utf8mb4");

    $result = mysqli_query($link, "SELECT * FROM bbs");
    ?>

    <div class="container mt-5">
        <h1>コメント一覧</h1>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div id="comments-container">
                <div class="card comment-card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row["name"]) ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($row["comment"]) ?></p>
                        <footer class="blockquote-footer">2024-08-29 12:34:56</footer>
                        <div class="edit-delete-buttons">
                            <a href="edit.php?id=<?php echo $row["id"]; ?>">編集</a>
                            <a href="delete.php?id=<?php echo $row["id"]; ?>">削除</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }

        // レコードセットを解放する
        mysqli_free_result($result);

        // コネクションを閉じる（データベースからログアウト）
        mysqli_close($link);
        ?>
        <br>

        <div class="form-container">
            <form action="login.php">
                <input type="submit" value="ログイン">
            </form>
            <a href="index.php">← コメント一覧へ戻る</a>
        </div>
    </div>
</body>

</html>
