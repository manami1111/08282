<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .login {
            background-color: #C2EEFF;
            text-align: center;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            border: #82aded dotted 5px;
            border-radius: 20px;
            padding: 20px;
        }
    </style>
    <title>ログイン</title>
</head>
<body>
    <div class="login">
        <h2>ログイン</h2>
        <form action="form.php" method="POST">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" placeholder="ID" required><br>
            <label for="pw">PW:</label>
            <input type="password" id="pw" name="pw" placeholder="Password" required><br>
            <button type="submit">送信</button>
        </form>
    </div>

</body>
</html>
