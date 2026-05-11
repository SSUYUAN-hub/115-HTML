<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>require 錯誤示範</title>
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
            background: #f8d7da;
            padding: 1.5rem;
            border-radius: 12px;
            margin: 1.5rem 0;
            border-left: 4px solid #dc3545;
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
    <h1>❌ require 錯誤示範</h1>

    <div class="content">
        <h2>嘗試包含不存在的檔案</h2>
        <p>這個頁面使用了 <code>require 'nonexistent.php';</code> 來包含一個不存在的檔案。</p>
        <p>require 會發出致命錯誤，頁面會停止執行。</p>
        <p><strong>注意：</strong> 如果你看到這個頁面，表示 require 失敗了，但由於這是示範，實際上頁面可能不會完全載入。</p>
    </div>

    <?php
    echo "<div class='content'>";
    echo "<p><strong>在 require 之前：</strong> 頁面正常執行</p>";
    require 'nonexistent.php';
    echo "<p><strong>在 require 之後：</strong> 如果你看到這行，表示檔案存在；否則頁面會停止。</p>";
    echo "</div>";
    ?>

    <a href="10-include.php" class="back-btn">← 返回教學頁面</a>
</div>

</body>
</html>