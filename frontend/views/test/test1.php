ทดสอบ 1 แสดงผลของ view ชื่อ tes1.php<br>

<?php
echo "a+b = ". $sum;

?>
=> ทดสอบรับค่าจาก controller ชื่อ TsetController<br>
<?php
echo "$a+$b=$sum";
echo   "...รับ array จาก controller";

?>

<hr>
array test in view
<hr>
<?php
$data1 = [1,2,3];
print_r($data1);
echo '<hr>';
$data2 = array(1,2,3,4);
print_r($data2);
echo '<hr>';
$data3 = ['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5];
print_r($data3);
echo '<hr>';
?>
