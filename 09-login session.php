<?php
session_start();
if(isset($_SESSION['login'])){
    header("location:user_center session.php");
}


?>



<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', 'Microsoft JhengHei', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .container {
            max-width: 450px;
            width: 100%;
            background: white;
            border-radius: 20px;
            padding: 3rem 2rem;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        h1 {
            color: #2c3e50;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            color: #7f8c8d;
            font-size: 0.95rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.8rem;
            color: #34495e;
            font-weight: 600;
            font-size: 0.95rem;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s ease;
            background: #f9f9f9;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus {
            border-color: #a8d5ba;
            background: #f8fffe;
            outline: none;
            box-shadow: 0 0 0 3px rgba(168, 213, 186, 0.1);
        }

        .checkbox-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #a8d5ba;
        }

        .remember-me label {
            margin: 0;
            font-weight: 400;
            cursor: pointer;
        }

        .forgot-password {
            color: #aa96da;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #8B5BB3;
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(168, 213, 186, 0.3);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(168, 213, 186, 0.4);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: #bdc3c7;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e0e0e0;
        }

        .divider-text {
            padding: 0 1rem;
            font-size: 0.9rem;
        }

        .signup-link {
            text-align: center;
            color: #7f8c8d;
        }

        .signup-link a {
            color: #aa96da;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .signup-link a:hover {
            color: #8B5BB3;
            text-decoration: underline;
        }

        .back-btn {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.8rem 1.5rem;
            background: white;
            color: #aa96da;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid #aa96da;
            text-align: center;
        }

        .back-btn:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(170, 150, 218, 0.2);
        }

        @media (max-width: 480px) {
            .container {
                padding: 2rem 1.5rem;
            }

            h1 {
                font-size: 1.5rem;
            }

            .checkbox-group {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>🔐 會員登入</h1>
            <p class="subtitle">輸入帳號和密碼進行登入</p>
        </div>

        <form action="user_center session.php" method="POST">
            <div class="form-group">
                <label for="username">帳號或信箱</label>
                <input type="text" id="username" name="username" placeholder="請輸入帳號或信箱" required>
            </div>

            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" id="password" name="password" placeholder="請輸入密碼" required>
            </div>

            <div class="checkbox-group">
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">記住我</label>
                </div>
                <a href="#" class="forgot-password">忘記密碼？</a>
            </div>

            <button type="submit" class="login-btn">登入</button>
        </form>

        <div class="divider">
            <span class="divider-text">或</span>
        </div>

        <p class="signup-link">
            還沒有帳號？ <a href="user_center.php">立即註冊</a>
        </p>

        <a href="index.php" class="back-btn">← 返回首頁</a>
    </div>
</body>

</html>