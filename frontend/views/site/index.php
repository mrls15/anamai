<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'ผู้มารับบริการแม่และเด็ก@รพ.มุกดาหาร';
?>

<?php

$route1=Yii::$app->UrlManager->createUrl('test/test1');

?>
<a href="<?=$route1;?>">ไปที่ test1</a> = ทำ link url ธรรมดา ไปแสดงที่ view<br>

<?php

$route2=Yii::$app->UrlManager->createUrl(['test/test2','name'=>'Yothin2','lname'=>'Traiyawong2']);

?>
<a href="<?=$route2;?>">ไปที่ test2 </a> = ส่งค่าไป controller แล้วไปแสดงที่ view<br>

<?=
Html::a('ลิงค์แบบที่3', ['test/test1','a'=>'1']);

?> = ทำ link url ธรรมดา ไปแสดงที่ view style Yii <br>
