<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆 - 可輸入月份</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', 'Microsoft JhengHei', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 2rem;
            min-height: 100vh;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            border-bottom: 3px solid #a8d5ba;
            padding-bottom: 1rem;
        }
        .info-list {
            list-style: none;
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            border-left: 4px solid #aa96da;
        }
        .info-list li {
            color: #34495e;
            padding: 0.6rem;
            display: flex;
            align-items: center;
        }
        .info-list li:before {
            content: "•";
            color: #a8d5ba;
            margin-right: 1rem;
            font-weight: bold;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 1.5rem 0;
        }
        table td {
            padding: 1rem 0.5rem;
            border: 1px solid #d4d4d4;
            text-align: center;
            color: #34495e;
            font-weight: 500;
        }
        table tr:first-child td {
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            color: white;
            font-weight: bold;
        }
        table td:nth-child(1),
        table td:nth-child(7) {
            color: #e74c3c;
        }
        table tr:hover td {
            background: #f0f3f7;
        }
        .back-btn {
            display: inline-block;
            margin-top: 1.5rem;
            padding: 0.8rem 1.5rem;
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(168, 213, 186, 0.3);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>📅 萬年曆 - 可輸入月份</h2>
        <?php
        $today = date("Y-m-d");
        $month="2026-07";
        $FirstDay=$month. "-01";
        $FirstDayWeek = date("w", strtotime($FirstDay));
        $MonthDays = date("t",strtotime($FirstDay));
        $LastDay = $month."-".$MonthDays;
        $LastDayWeek = date('w', strtotime($LastDay));
        $TotalDays = $MonthDays + $FirstDayWeek + (6 - $LastDayWeek);
        $TotalWeeks = $TotalDays / 7
        ?>
        <ul class="info-list">
            <li>這個月的天數一共有 <?= $MonthDays; ?> 天</li>
            <li>這個月的第一天是 <?= $FirstDay; ?></li>
            <li>這個月的第一天是星期 <?= $FirstDayWeek; ?></li>
            <li>這個月的最後一天是 <?= $LastDay; ?></li>
            <li>這個月的最後一天是星期 <?= $LastDayWeek; ?></li>
            <li>這個月曆一共要畫出 <?= $TotalDays; ?> 格</li>
        </ul>
        <table>
            <tr>
                <td>日</td>
                <td>一</td>
                <td>二</td>
                <td>三</td>
                <td>四</td>
                <td>五</td>
                <td>六</td>
            </tr>
   
</body>

</html>