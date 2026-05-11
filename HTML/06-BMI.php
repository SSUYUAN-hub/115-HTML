<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI 計算機</title>
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .page-title {
            text-align: center;
            color: white;
            margin-bottom: 2rem;
            font-size: 2rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .container {
            max-width: 900px;
            width: 100%;
        }

        .instructions {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .instructions h2 {
            color: #2c3e50;
            margin-bottom: 1rem;
            border-bottom: 3px solid #a8d5ba;
            padding-bottom: 0.5rem;
        }

        .instructions ul {
            list-style: none;
            padding: 0;
        }

        .instructions li {
            color: #34495e;
            padding: 0.8rem;
            background: #f8f9fa;
            margin-bottom: 0.8rem;
            border-radius: 8px;
            display: flex;
            align-items: center;
        }

        .instructions li:before {
            content: "→";
            color: #aa96da;
            margin-right: 1rem;
            font-weight: bold;
        }

        .forms-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .calculator-card {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .calculator-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .calculator-card h2 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            text-align: center;
            border-bottom: 3px solid #a8d5ba;
            padding-bottom: 1rem;
        }

        .input-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 0.6rem;
            color: #34495e;
            font-weight: 600;
            font-size: 0.95rem;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #d4d4d4;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s, background-color 0.3s;
            font-family: inherit;
        }

        input[type="number"]:focus {
            border-color: #a8d5ba;
            background-color: #f8fffe;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px 1.5rem;
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(168, 213, 186, 0.3);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(168, 213, 186, 0.4);
        }

        button:active {
            transform: translateY(0);
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
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .back-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        @media (max-width: 768px) {
            .forms-wrapper {
                grid-template-columns: 1fr;
            }

            .page-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="page-title">📊 BMI 體態計算機</div>
    <div class="container">
        <div class="instructions">
            <h2>說明</h2>
            <ul>
                <li>建立一個可以輸入身高和體重的表單畫面</li>
                <li>按下"計算BMI"按鈕後，在另一個頁面顯示BMI值</li>
            </ul>
        </div>

        <div class="forms-wrapper">
            <div class="calculator-card">
                <h2>BMI 體態計算機[GET]</h2>
                <form action="BMI_result.php" method="GET">
                    <div class="input-group">
                        <label for="height-get">身高 (公分 cm)</label>
                        <input type="number" name="height" id="height-get" step="0.1" placeholder="例如：175" required>
                    </div>
                    <div class="input-group">
                        <label for="weight-get">體重 (公斤 kg)</label>
                        <input type="number" name="weight" id="weight-get" step="0.1" placeholder="例如：70" required>
                    </div>
                    <button type="submit">開始計算</button>
                </form>
            </div>

            <div class="calculator-card">
                <h2>BMI 體態計算機[POST]</h2>
                <form action="BMI_result.php" method="POST">
                    <div class="input-group">
                        <label for="height-post">身高 (公分 cm)</label>
                        <input type="number" name="height" id="height-post" step="0.1" placeholder="例如：175" required>
                    </div>
                    <div class="input-group">
                        <label for="weight-post">體重 (公斤 kg)</label>
                        <input type="number" name="weight" id="weight-post" step="0.1" placeholder="例如：70" required>
                    </div>
                    <button type="submit">開始計算</button>
                </form>
            </div>
        </div>

        <a href="index.php" class="back-btn">← 返回首頁</a>
    </div>
</body>

</html>