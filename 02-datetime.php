<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>給定兩個日期，計算中間間隔天數</h2>
    <ui>
        <ul>起始日期：2026-04-09</ul>
        <ul>結束時間：2026-05-04</ul>
    </ui>

    <?php
$star_date="2026-04-09";
$end_date="2026-05-04";
// 日期是字串沒有辦法計算，要轉換成可計算的格式
$next_date_tmp=strtotime($star_date);
$end_date_tmp=strtotime($end_date);
// 再將計算格式轉回日期格式
$next_date=date("Y-m-d H:i:s",$next_date_tmp);
$end_date=date("Y-m-d H:i:s",$end_date_tmp);
// echo $next_date;
// echo "<br>";
// echo $end_date;      
$diff=($end_date_tmp - $next_date_tmp)/(60*60*24);
echo "<br>";
echo "間隔間數". $diff. "天";

    ?>
    <br>

    <?php
date_default_timezone_set('UTC');   
$star_date=date("Y-m-d");
$birthday="2027-01-03";

// 先轉換數據用來判斷生日過了沒
$start_time=strtotime($star_date);
$birthday_string=date("Y").date("-m-d",strtotime($birthday));
$birthday_time=strtotime($birthday_string);
// 依前面轉換結果判斷生日過了沒，如果已經過了就自動+1年
if($birthday_time>$start_time){
$diff=($birthday_time - $start_time)/(60*60*24);

}else{
$birthday_time=strtotime("+1 year",strtotime($birthday_string));
$diff=($birthday_time - $start_time)/(60*60*24);
}
$birthday_date=date("Y-m-d",$birthday_time);
echo "今天日期是" .$star_date. "<br>";
echo "下次生日是" .$birthday_date. "<br>";
echo "距離下次生日還有" .$diff. "天";

// // 日期是字串沒有辦法計算，要轉換成可計算的格式
// $next_date_tmp=strtotime($star_date);
// $end_date_tmp=strtotime($end_date);
// // 再將計算格式轉回日期格式
// $next_date=date("Y-m-d H:i:s",$next_date_tmp);
// $end_date=date("Y-m-d H:i:s",$end_date_tmp);
// // echo $next_date;
// // echo "<br>";
// // echo $end_date; 
// echo "今天日期是".$star_date. "<br>";     
// $diff=($end_date_tmp - $next_date_tmp)/(60*60*24);
// echo "<br>";
// echo "間隔間數". $diff. "天";

?>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>

<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php

echo date("Y/m/d");
echo "<br>";
echo date("n月j日 l");
echo "<br>";
echo date("Y-m-d G:").(int)date("i").":".(int)date("s");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo "今天是西元";
echo date("Y年m月d日");
echo (date("N")>5)?" 假日":" 上班日";
echo "<br>";



?>

<h2>利用迴圈來計算連續五個周一的日期</h2>
例:

<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>

<?php
$date="2026-05-04";
for($i=1;$i<=5;$i++){
$timestring=strtotime("+$i weeks" , strtotime($date));
echo date("Y-m-d 星期一",$timestring);
echo "<br>";


}





?>
</body>
</html>