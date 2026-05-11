<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include 錯誤示範</title>
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
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            border-bottom: 3px solid #a8d5ba;
            padding-bottom: 1rem;
        }
        .content {
            background: #fff3cd;
            padding: 1.5rem;
            border-radius: 12px;
            margin: 1.5rem 0;
            border-left: 4px solid #ffc107;
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
    <h1>⚠️ include 錯誤示範</h1>

    <div class="content">
        <h2>嘗試包含不存在的檔案</h2>
        <p>這個頁面使用了 <code>include 'nonexistent.php';</code> 來包含一個不存在的檔案。</p>
        <p>include 會發出警告，但頁面會繼續執行。</p>
        <p>讓我們看看會發生什麼：</p>
    </div>

    <?php
    echo "<div class='content'>";
    echo "<p><strong>在 include 之前：</strong> 頁面正常執行</p>";
    include 'nonexistent.php';
    echo "<p><strong>在 include 之後：</strong> 頁面繼續執行，儘管有警告</p>";
    echo "</div>";
    ?>

    <a href="10-include.php" class="back-btn">← 返回教學頁面</a>
</div>

</body>
</html>