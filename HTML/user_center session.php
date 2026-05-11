<?php
session_start();
if(!isset($_SESSION['login'])){
if(!($_POST['username']=='ssuyuan' && $_POST['password']=='1234')){
    echo "帳號或密碼輸入錯誤";
    echo "<br>";
    echo "<a href='09-login session.php'>返回登入</a>";
    echo exit();
}
$_SESSION['login']=1;
}
    ?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
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
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .header {
            text-align: center;
            margin-bottom: 2.5rem;
            border-bottom: 3px solid #a8d5ba;
            padding-bottom: 1.5rem;
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

        .content-wrapper {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .profile-card {
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            border-radius: 16px;
            padding: 1.5rem;
            color: white;
            text-align: center;
            box-shadow: 0 8px 20px rgba(168, 213, 186, 0.2);
        }

        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: white;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .profile-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .profile-email {
            font-size: 0.85rem;
            opacity: 0.9;
        }

        .menu-list {
            list-style: none;
        }

        .menu-item {
            padding: 0;
        }

        .menu-item a {
            display: block;
            padding: 1rem 1.5rem;
            background: #f8f9fa;
            color: #34495e;
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            font-weight: 500;
        }

        .menu-item a:hover {
            background: linear-gradient(135deg, #a8d5ba15 0%, #aa96da15 100%);
            color: #aa96da;
            border-left-color: #aa96da;
            transform: translateX(5px);
        }

        .main-content {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .section {
            background: #f8f9fa;
            border-radius: 16px;
            padding: 2rem;
            border-left: 4px solid #a8d5ba;
        }

        .section-title {
            color: #2c3e50;
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.6rem;
            color: #34495e;
            font-weight: 600;
            font-size: 0.95rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid #d4d4d4;
            border-radius: 8px;
            font-size: 0.95rem;
            font-family: inherit;
            transition: all 0.3s ease;
            background: white;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #a8d5ba;
            background: #f8fffe;
            outline: none;
            box-shadow: 0 0 0 3px rgba(168, 213, 186, 0.1);
        }

        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid #d4d4d4;
            border-radius: 8px;
            font-size: 0.95rem;
            font-family: inherit;
            resize: vertical;
            min-height: 100px;
            transition: all 0.3s ease;
            background: white;
        }

        textarea:focus {
            border-color: #a8d5ba;
            background: #f8fffe;
            outline: none;
            box-shadow: 0 0 0 3px rgba(168, 213, 186, 0.1);
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 2rem;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #a8d5ba 0%, #aa96da 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(168, 213, 186, 0.3);
            flex: 1;
            min-width: 150px;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(168, 213, 186, 0.4);
        }

        .btn-secondary {
            background: white;
            color: #aa96da;
            border: 2px solid #aa96da;
        }

        .btn-secondary:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
        }

        .btn-danger {
            background: #ffccbc;
            color: #d84315;
        }

        .btn-danger:hover {
            background: #ffb399;
            transform: translateY(-2px);
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .info-box {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            border-left: 4px solid #aa96da;
        }

        .info-label {
            color: #7f8c8d;
            font-size: 0.85rem;
            margin-bottom: 0.5rem;
        }

        .info-value {
            color: #2c3e50;
            font-size: 1rem;
            font-weight: 600;
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
        }

        .back-btn:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(170, 150, 218, 0.2);
        }

        @media (max-width: 768px) {
            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .button-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>👤 會員中心</h1>
            <p class="subtitle">管理您的個人資料和帳戶設定</p>
        </div>

        <div class="content-wrapper">
            <div class="sidebar">
                <div class="profile-card">
                    <div class="profile-avatar">👤</div>
                    <div class="profile-name"><?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : "訪客"; ?></div>
                    <div class="profile-email">user@example.com</div>
                </div>

                <ul class="menu-list">
                    <li class="menu-item"><a href="#profile">📋 個人資料</a></li>
                    <li class="menu-item"><a href="#account">🔐 會員等級(<?=$_SESSION['login'];?>)</a></li>
                    <li class="menu-item"><a href="#account">🔐 帳戶設定</a></li>
                    <li class="menu-item"><a href="#history">📜 交易記錄</a></li>
                    <li class="menu-item"><a href="#settings">⚙️ 偏好設定</a></li>
                    <li class="menu-item"><a href="09-login session.php">🚪 登出</a></li>
                </ul>
            </div>

            <div class="main-content">
                <div id="profile" class="section">
                    <h2 class="section-title">📋 個人資料</h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstname">名字</label>
                                <input type="text" id="firstname" name="firstname" value="小" placeholder="請輸入名字">
                            </div>
                            <div class="form-group">
                                <label for="lastname">姓氏</label>
                                <input type="text" id="lastname" name="lastname" value="王" placeholder="請輸入姓氏">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">電子郵件</label>
                                <input type="email" id="email" name="email" value="user@example.com" placeholder="請輸入郵件">
                            </div>
                            <div class="form-group">
                                <label for="phone">電話</label>
                                <input type="tel" id="phone" name="phone" value="0912345678" placeholder="請輸入電話">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="birthday">生日</label>
                                <input type="date" id="birthday" name="birthday" value="1990-01-15">
                            </div>
                            <div class="form-group">
                                <label for="gender">性別</label>
                                <select id="gender" name="gender">
                                    <option selected>男性</option>
                                    <option>女性</option>
                                    <option>其他</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">地址</label>
                            <input type="text" id="address" name="address" value="台北市中山區" placeholder="請輸入地址">
                        </div>

                        <div class="form-group">
                            <label for="bio">個人簡介</label>
                            <textarea id="bio" name="bio" placeholder="請輸入個人簡介"></textarea>
                        </div>

                        <div class="button-group">
                            <button type="submit" class="btn btn-primary">💾 保存變更</button>
                            <button type="reset" class="btn btn-secondary">🔄 重置</button>
                        </div>
                    </form>
                </div>

                <div id="account" class="section">
                    <h2 class="section-title">🔐 帳戶設定</h2>
                    <div class="info-grid">
                        <div class="info-box">
                            <div class="info-label">帳號狀態</div>
                            <div class="info-value">✅ 已驗證</div>
                        </div>
                        <div class="info-box">
                            <div class="info-label">加入日期</div>
                            <div class="info-value">2024-01-15</div>
                        </div>
                    </div>

                    <form>
                        <div class="form-group">
                            <label for="oldpass">舊密碼</label>
                            <input type="password" id="oldpass" name="oldpass" placeholder="請輸入舊密碼">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="newpass">新密碼</label>
                                <input type="password" id="newpass" name="newpass" placeholder="請輸入新密碼">
                            </div>
                            <div class="form-group">
                                <label for="confirmpass">確認密碼</label>
                                <input type="password" id="confirmpass" name="confirmpass" placeholder="請再次輸入密碼">
                            </div>
                        </div>

                        <div class="button-group">
                            <button type="submit" class="btn btn-primary">🔐 變更密碼</button>
                            <button type="button" class="btn btn-danger">🗑️ 刪除帳戶</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <a href="09-login session.php" class="back-btn">← 返回登入頁</a>
    </div>
</body>

</html>
