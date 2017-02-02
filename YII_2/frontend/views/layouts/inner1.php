<?
//use frontend;
use yii\helpers\Html;
use yii\bootstrap\Nav;
\frontend\assets\InnerAsset::register($this);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html data-platform="Linux i686" data-useragent="Mozilla/5.0 (X11; Linux i686; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.5.0" slick-uniqueid="3" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" dir="ltr" lang="en-gb">
<head>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  	<meta http-equiv="content-type" content="text/html; charset=<?= Yii::$app->charset ?>">
	<?= \yii\helpers\Html::csrfMetaTags(); ?>

 
	<title><?= \yii\helpers\Html::encode($this->title); ?></title>
	<?php $this->head(); ?>


<body class="">
<?php $this->beginBody(); ?>

<?= $this->render("//common/inner_header");  // это указывает // на папку views ?>
 
<?//=$content ?>

<?//= $this->render("//common/inner_footer");  // это указывает // на папку views ?>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
