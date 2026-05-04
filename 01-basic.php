<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</ul>

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