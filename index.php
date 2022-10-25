<?php echo 'hello world!!!!!!!'; ?>
<?php
$result = 1+1;
echo $result; 
?>
<br>
<?php
echo date('Y-m-d')."<br/>\n";//現在日付 2019-12-31
echo date('H:i:s')."<br/>\n";//現在時間 23:59:59
echo date('Y-m-d H:i:s')."<br/>\n";//現在日時 2019-12-31 23:59:59
?>
<br>
<?php
echo 'Current PHP version: ' . phpversion();
?>