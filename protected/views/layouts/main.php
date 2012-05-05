<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php 
	$baseUrl = Utils::getBaseUrl();?>
<div class="container" id="page">
	<div id="header">
		<div id="logo"><img src="<?php echo $baseUrl?>/images/iccmulogo.png" />
		<?php //echo CHtml::encode(Yii::app()->name); ?>
	<div id="cse-search-form" style="width: 25%;float:right">Loading</div>
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript"> 
		  google.load('search', '1', {language : 'en', style : google.loader.themes.V2_DEFAULT});
		  google.setOnLoadCallback(function() {
		    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
		      '012787590946701049736:vcv2njp2nie', customSearchOptions);
		    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
		    var options = new google.search.DrawOptions();
		    options.enableSearchboxOnly("http://localhost/iccmu/site/searchresult");
		    customSearchControl.draw('cse-search-form', options);
		  }, true);
		</script>
			<div id="topmenu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
					    array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
					    array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
					    array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
					    array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
					  
					    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Wiki', 'url'=>array('/site/contact')),
						array('label'=>'Forum', 'url'=>array('/site/contact')),
						array('label'=>'Contact Us', 'url'=>array('/site/contact'))
					),
				)); ?>
			</div>
		</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'For Community', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'For Clinicians', 'url'=>array('/site/contact')),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<div id="flogo" style="float:left;padding-left:15px;"> <img src="<?php echo $baseUrl?>/images/iccmulogo.png" style="margin-bottom:10px;"/>
			<p>Copyright 2012 &copy ICCMU. <br/> All Rights Reserved.</p>
		</div>
		<div id="fcontent"> 
			<p>Copyright 2012 &copy ICCMU. <br/> All Rights Reserved.</p>
		</div>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
