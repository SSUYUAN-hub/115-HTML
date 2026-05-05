<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP include 與 require 教學</title>
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
        h2 {
            color: #34495e;
            margin: 2rem 0 1rem 0;
            border-left: 4px solid #aa96da;
            padding-left: 1rem;
        }
        p {
            color: #34495e;
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        .code-block {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 1rem;
            margin: 1rem 0;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }
        .demo-section {
            background: #f0f3f7;
            border-radius: 12px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-left: 4px solid #a8d5ba;
        }
        .nav-links {
            display: flex;
            justify-content: space-around;
            gap: 1rem;
            margin: 2rem 0;
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
        .highlight {
            background: #fff3cd;
            padding: 0.5rem;
            border-radius: 4px;
            border-left: 4px solid #ffc107;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>📚 PHP include 與 require 教學</h1>

    <h2>🔍 什麼是 include 和 require？</h2>
    <p>在 PHP 中，<code>include</code> 和 <code>require</code> 都是用來將其他 PHP 檔案的內容插入到當前檔案中的語句。它們允許我們重用程式碼，例如共用的函數、類別或 HTML 模板。</p>

    <h2>⚖️ include 與 require 的差別</h2>
    <div class="highlight">
        <strong>主要差別：</strong>
        <ul>
            <li><strong>include：</strong> 如果包含的檔案不存在，會發出警告 (Warning)，但程式會繼續執行。</li>
            <li><strong>require：</strong> 如果包含的檔案不存在，會發出致命錯誤 (Fatal Error)，程式會停止執行。</li>
        </ul>
    </div>

    <h2>🔄 include_once 與 require_once</h2>
    <p>為了避免重複包含同一個檔案，可以使用 <code>include_once</code> 和 <code>require_once</code>。這些語句會檢查檔案是否已經被包含過，如果是，就不會再次包含。</p>

    <h2>📝 語法示範</h2>
    <div class="code-block">
&lt;?php<br>
include 'header.php';<br>
require 'config.php';<br>
include_once 'functions.php';<br>
require_once 'database.php';<br>
?&gt;
    </div>

    <h2>🎯 實際示範</h2>
    <p>讓我們看看實際的示範。以下連結會展示 include 和 require 的行為差異：</p>

    <div class="nav-links">
        <a href="include_demo.php">📄 include 示範</a>
        <a href="require_demo.php">📋 require 示範</a>
        <a href="include_error_demo.php">⚠️ include 錯誤示範</a>
        <a href="require_error_demo.php">❌ require 錯誤示範</a>
    </div>

    <h2>💡 使用建議</h2>
    <ul>
        <li>對於非關鍵性的檔案（如選用模組），使用 <code>include</code></li>
        <li>對於關鍵性的檔案（如資料庫連線、設定），使用 <code>require</code></li>
        <li>總是使用 <code>_once</code> 版本來避免重複包含</li>
        <li>使用相對路徑或絕對路徑來指定檔案位置</li>
    </ul>

    <a href="index.php" class="back-btn">← 返回首頁</a>
</div>

</body>
</html>