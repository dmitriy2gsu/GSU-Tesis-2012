<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<h1 id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></h1>

	<div id="mainmenu">
		<?php echo CHtml::link('Main',array('/'));?>
		<?php echo CHtml::link('Catalog',array('catalog/'));?>
	</div>
	<div id="sp-categories">
	<?php $this->widget('CategoriesWidget');?>
	</div>
	<!-- Something strange here in eclipse 3.7 -->
	<?php echo $content;?>
	<!-- page -->

</body>
</html>