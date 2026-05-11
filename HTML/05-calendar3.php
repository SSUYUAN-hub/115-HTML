<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆 - 可自動調整月份</title>
    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
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
            max-width: 700px;
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
        h3 {
            color: #34495e;
            margin: 1rem 0;
            text-align: center;
        }
        .info-list {
            list-style: none;
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 12px;
            margin: 1.5rem 0;
            border-left: 4px solid #aa96da;
        }
        .info-list li {
            color: #34495e;
            padding: 0.5rem;
            display: flex;
            align-items: center;
        }
        .info-list li:before {
            content: "•";
            color: #a8d5ba;
            margin-right: 0.8rem;
            font-weight: bold;
        }
        .nav-links {
            display: flex;
            justify-content: space-around;
            gap: 1rem;
            margin: 1.5rem 0;
        }
        .nav-links a {
            flex: 1;
            padding: 0.8rem;
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .nav-links a:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(168, 213, 186, 0.3);
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
            font-size: 15px;
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
    <h2>📅 萬年曆 - 可自動調整月份</h2>
    <?php
    $today = date("Y-m-d");
    if (isset($_GET['month'])) {
        $month = $_GET['month'];
    } else {
        $month = date("Y-m");
    }
    $FirstDay = $month . "-01";
    $FirstDayWeek = date("w", strtotime($FirstDay));
    $MonthDays = date("t", strtotime($FirstDay));
    $LastDay = $month . "-" . $MonthDays;
    $LastDayWeek = date('w', strtotime($LastDay));
    $TotalDays = $MonthDays + $FirstDayWeek + (6 - $LastDayWeek);
    $TotalWeeks = $TotalDays / 7;
    $prevMonth = date("Y-m", strtotime("-1 month", strtotime($FirstDay)));
    $nextMonth = date("Y-m", strtotime("+1 month", strtotime($FirstDay)));
    ?>

    <h3>📆 今天是 <?= $today; ?></h3>
    <!-- <ul class="info-list">
        <li>這個月的天數一共有 <?= $MonthDays; ?> 天</li>
        <li>這個月的第 1 天是 <?= $FirstDay; ?></li>
        <li>這個月的第 1 天是星期 <?= $FirstDayWeek; ?></li>
        <li>這個月的最後 1 天是 <?= $LastDay; ?></li>
        <li>這個月的最後 1 天是星期 <?= $LastDayWeek; ?></li>
        <li>這個月曆一共要畫出(含空白) <?= $TotalDays; ?> 格子</li>
    </ul> -->

    <h2><?= $month; ?> 月</h2>
    <div class="nav-links">
        <a href="05-calendar3.php?month=<?= $prevMonth; ?>">← 上一個月</a>
        <a href="05-calendar3.php?month=<?= $nextMonth; ?>">下一個月 →</a>
    </div>

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
        <?php
        for ($i = 0; $i < $TotalWeeks; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                echo "<td>";
                $DayNumber = ($i * 7 + $j) - ($FirstDayWeek - 1);
                if ($DayNumber > 0 && $DayNumber <= $MonthDays) {
                    echo $DayNumber;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <a href="index.php" class="back-btn">← 返回首頁</a>
</div>

</body>
</html>
