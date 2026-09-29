<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .message {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 400px;
        }
        h2 {
            color: #333;
        }
        p {
            color: #555;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .logout-btn {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #6a11cb;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .logout-btn:hover {
            background: #2575fc;
        }
    </style>
</head>
<body>
    <div class="message">
        <?php
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];

        if ($password === $confirm) {
            echo "<h2>Thank $fullname !</h2>";
            echo "<p>Please confirm registration in your email: $email</p>";
        } else {
            echo "<p class='error'>Incorrect confirm password!</p>";
        }
        ?>
        <a href="index.html" class="logout-btn">Đăng xuất</a>
    </div>
</body>
</html>
