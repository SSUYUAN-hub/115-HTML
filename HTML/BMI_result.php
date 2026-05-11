<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI 計算結果</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', 'Microsoft JhengHei', sans-serif;
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .container {
            max-width: 500px;
            width: 100%;
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 2rem;
            font-size: 1.8rem;
            border-bottom: 3px solid #a8d5ba;
            padding-bottom: 1rem;
        }

        .error-message {
            background: #ffebee;
            color: #c62828;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            border-left: 4px solid #c62828;
        }

        .error-message a {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.8rem 1.5rem;
            background: #c62828;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .error-message a:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(198, 40, 40, 0.3);
        }

        .result-item {
            background: #f8f9fa;
            padding: 1.2rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-left: 4px solid #a8d5ba;
        }

        .result-label {
            color: #34495e;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .result-value {
            color: #2c3e50;
            font-size: 1.1rem;
            font-weight: 700;
            background: white;
            padding: 0.6rem 1rem;
            border-radius: 6px;
            min-width: 80px;
            text-align: center;
        }

        .bmi-status {
            margin-top: 2rem;
            padding: 1.5rem;
            border-radius: 12px;
            text-align: center;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .status-normal {
            background: #c8e6c9;
            color: #1b5e20;
            border: 2px solid #1b5e20;
        }

        .status-light {
            background: #fff9c4;
            color: #f57f17;
            border: 2px solid #f57f17;
        }

        .status-over {
            background: #ffe0b2;
            color: #e65100;
            border: 2px solid #e65100;
        }

        .status-obese {
            background: #ffccbc;
            color: #d84315;
            border: 2px solid #d84315;
        }

        .bmi-status-label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .button-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.8rem 1rem;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-again {
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            color: white;
        }

        .btn-again:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(168, 213, 186, 0.3);
        }

        .btn-home {
            background: white;
            color: #aa96da;
            border: 2px solid #aa96da;
        }

        .btn-home:hover {
            transform: translateY(-2px);
            background: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>📈 BMI 計算結果</h1>

        <?php

        if (isset($_GET['height'])) {
            $height = $_GET['height'];
        }
        if (isset($_GET['weight'])) {
            $weight = $_GET['weight'];
        }
        if (isset($_POST['height'])) {
            $height = $_POST['height'];
        }
        if (isset($_POST['weight'])) {
            $weight = $_POST['weight'];
        }
        if (empty($height) || empty($weight)){
            echo "<div class='error-message'>";
            echo "<strong>⚠️ 錯誤</strong><br>";
            echo "資料有誤，請重新輸入";
            echo "<br><a href='06-BMI.php'>重新計算</a>";
            echo "</div>";
            exit();
        }
        
        $BMI = round($weight / (($height * $height) / 10000), 1);
        $test = "";
        $statusClass = "";
       
        if ($BMI < 18.5) {
            $test = "過輕";
            $statusClass = "status-light";
        } elseif ($BMI < 24) {
            $test = "正常";
            $statusClass = "status-normal";
        } elseif ($BMI < 27) {
            $test = "過重";
            $statusClass = "status-over";
        } else {
            $test = "肥胖";
            $statusClass = "status-obese";
        }
        ?>

        <div class="result-item">
            <span class="result-label">📏 你的身高</span>
            <span class="result-value"><?= $height ?> 公分</span>
        </div>

        <div class="result-item">
            <span class="result-label">⚖️ 你的體重</span>
            <span class="result-value"><?= $weight ?> 公斤</span>
        </div>

        <div class="result-item">
            <span class="result-label">📊 BMI 指數</span>
            <span class="result-value"><?= $BMI ?></span>
        </div>

        <div class="bmi-status <?= $statusClass ?>">
            <span class="bmi-status-label">體位判定</span>
            <strong><?= $test ?></strong>
        </div>

        <div class="button-group">
            <a href="06-BMI.php" class="btn btn-again">🔄 重新計算</a>
            <a href="index.php" class="btn btn-home">🏠 返回首頁</a>
        </div>
    </div>
</body>

</html>