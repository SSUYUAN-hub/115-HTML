<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML基礎練習</title>
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
            padding: 2rem;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 3rem 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            letter-spacing: 1px;
        }
        .nav-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .nav-item {
            padding: 0;
        }
        .nav-item a {
            display: block;
            padding: 1.2rem 1.5rem;
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-weight: 500;
            text-align: center;
            box-shadow: 0 4px 15px rgba(168, 213, 186, 0.3);
        }
        .nav-item a:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(168, 213, 186, 0.4);
            background: linear-gradient(135deg, #95c89b 0%, #9982c9 100%);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>🎓 HTML基礎練習</h1>
        <ul class="nav-list">
            <li class="nav-item"><a href="01-basic.php">01. 字串取代</a></li>
            <li class="nav-item"><a href="02-datetime.php">02. 日期及時間處理</a></li>
            <li class="nav-item"><a href="03-calendar.php">03. 萬年曆(當月份)</a></li>
            <li class="nav-item"><a href="04-calendar2.php">04. 萬年曆(可輸入月份)</a></li>
            <li class="nav-item"><a href="05-calendar3.php">05. 萬年曆(可自動調整月份)</a></li>
            <li class="nav-item"><a href="06-BMI.php">06. BMI計算機</a></li>
            <li class="nav-item"><a href="07-login.php">07. 會員登入</a></li>
            <li class="nav-item"><a href="08-login cookie.php">08. 登入檢查-cookie</a></li>
            <li class="nav-item"><a href="09-login session.php">09. 登入檢查-session</a></li>
            <li class="nav-item"><a href="10-include.php">10. include應用</a></li>
        </ul>
    </div>
</body>

</html>