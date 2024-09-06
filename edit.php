<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>

<body>
    <div class="form-container">
        <form action="index.php" method="POST">
            <span>投稿者</span>
            <input type="text" name="name" placeholder="投稿者名" required><br>
            <span>本文</span>
            <textarea name="comment" placeholder="本文" required></textarea><br>
            <input type="submit" value="送信">
        </form>
    </div>


    <?php
    // コネクションを開く
    $link = mysqli_connect("localhost", "root", "mariadb", "08282");

    // 文字コードを設定
    mysqli_set_charset($link, "utf8mb4");

    // UPDATE文を発行
    mysqli_query($link, "UPDATE bbs SET")
    ?>

</body>

</html>