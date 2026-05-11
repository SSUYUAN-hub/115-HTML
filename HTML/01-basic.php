<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理練習</title>
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
            color: #2c3e50;
            margin-bottom: 2rem;
            border-bottom: 3px solid #a8d5ba;
            padding-bottom: 1rem;
            text-align: center;
        }
        h2 {
            color: #34495e;
            margin-top: 1.5rem;
            margin-bottom: 0.8rem;
            padding-left: 1rem;
            border-left: 4px solid #aa96da;
        }
        p {
            color: #555;
            margin-bottom: 1rem;
            padding: 0.8rem;
            background: #f8f9fa;
            border-radius: 8px;
            line-height: 1.6;
        }
        pre {
            background: #f0f3f7;
            padding: 1rem;
            border-radius: 8px;
            overflow-x: auto;
            border-left: 4px solid #a8d5ba;
            margin: 1rem 0;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        .back-btn {
            display: inline-block;
            margin-top: 2rem;
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
  <h1>字串處理練習</h1>
<h2>字串取代</h2>
<p>將”aaddw1123”改成”*********”</p>

<?php
$str="aaddw1123";
$str=str_replace(["a","d","w",1,2,3],"*",($str));
echo $str;
echo "<br>";
echo str_repeat("*",mb_strlen($str));

?>
<h2>字串分割</h2>
<p>將”this,is,a,book”依”,”切割後成為陣列</p>
<?php
$str="this,is,a,book";
$new=explode(",",$str);
echo "<pre>";
print_r($new);
echo "</pre>";
?>
<h2>字串組合</h2>
<p>將上例陣列重新組合成“this is a book”  </p> 
<?php
$str=join(" ",$new);
echo $str;

?>

<h2>字串組合</h2>
<p>將上例陣列重新組合成“this is a book”  </p> 
<?php
$str=join(" ",$new);
echo $str;

?>

<h2>子字串取用</h2>

<ul>
  <ui>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</ui>
</ul>  </div>
  <div class="container" style="margin-top: 1rem;">
    <a href="index.php" class="back-btn">← 返回首頁</a>
  </div>
<?php
$str="The reason why a great man is great is that he resolves to be a great man";
$short=mb_substr($str,0,10);
echo $short . "...";
?>
<br>
<!-- 取中文字 -->
<h3>偉人之所以偉大，是因為他決心成為偉人</h3>
<?php
$str="偉人之所以偉大，是因為他決心成為偉人";
$short=mb_substr($str,0,10);
echo $short . "...";

?>

<h2>尋找字串與HTML、css整合應用</h2>

<ui>
  <ul>給定一個句子，將指定的關鍵字放大</ul>
  <ul>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</ul>
  <ul>請將上句中的 “程式設計” 放大字型或變色.</ul>
</ui>

<?php
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$short=mb_substr($str,7,4);
$tmp="<span style='color:blue;'>$short</span>";
$str=str_replace($short,$tmp,$str);
echo $str;

?>
<br>

<?php
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$keyword="程式設計";
$tmp="<span style='color:blue;'>$keyword</span>";
if(strpos($str,$keyword)>0){
$str=str_replace($keyword,$tmp,$str);
}
echo $str;
?>
<br>
<?php
$str="一名男子表示，iPhone儲存空間幾乎爆滿後，發現最有效釋放容量的方式，是將手機內App刪除再重新安裝，結果成功釋出近100GB空間，就像新機一樣，將其PO上網後引發討論；對此，蘋果官方過去曾表示，若手機儲存空間不足，可自行移除App，或至「設定」中點選「一般」，進入「iPhone儲存空間」，開啟「卸載未使用的App」功能，即可讓系統自動移除較少使用的應用程式";
echo $str;
echo "<br>";
$keyword=["手機","空間"];
$tmp=[];
foreach($keyword as $k){
 $tmp[]="<span style='color:blue;'>$k</span>";
}
$str=str_replace($keyword,$tmp,$str);
echo $str;
?>
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>

</body>
</html>