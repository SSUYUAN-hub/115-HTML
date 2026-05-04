<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
    <ul>
        <li>這個月的天數一共有<?= $MonthDays; ?></li>
        <li>這個月的第一天是<?= $FirstDay; ?></li>
        <li>這個月的第一天是星期<?= $FirstDayWeek; ?></li>
        <li>這個月的最後一天是<?= $LastDay; ?></li>
        <li>這個月的最後一天是星期<?= $LastDayWeek; ?></li>
        <li>這個月曆一共要畫出<?= $TotalDays; ?>格</li>
    </ul>
    <style>
        table {
            border-collapse: collapse;
        }
        table td {
            padding: 5px 10px;
            border: 1px solid #999;
        }
    </style>
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
                echo "<td data-date=''>";
                $DayNumber = ($i * 7 + $j) - ($FirstDayWeek - 1);
                if ($DayNumber > 0 && $DayNumber <= $MonthDays) {
                    echo $DayNumber;
                }
            }
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
   
</body>

</html>