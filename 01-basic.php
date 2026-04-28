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
</body>
</html>