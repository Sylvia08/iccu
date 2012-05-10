<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font.css" />
</head>

<body>
<div id="header">
  <div class="container-fluid">
    <div class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/iccmulogo.png" alt="ICCMU Website"/>
        </a>
    </div>
    <div class="block-header">
      <ul>
        <li><a href="<?php echo Yii::app()->request->baseUrl.'/posts/9'; ?>">About</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Wiki</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl.'/user/login'; ?>">Login</a></li>
      </ul>
    </div>
  </div>
</div><!-- header -->
<?php
    Yii::app()->clientScript->registerScript(
       'navbarHoverEffect',
       '$(".nav > li > a").hover( function(){$(this).tab("show");});',
       CClientScript::POS_READY
    );
?>
<?php
    $module = Yii::app()->controller->module->id;
    $controller = Yii::app()->controller->id;
    $action = $this->action->Id; 
    
    $this->widget('bootstrap.widgets.BootNavbar', array(
      'fixed'=>false,
      'collapse'=>true, // requires bootstrap-responsive.css
      'items'=>array(
        array(
          'class'=>'bootstrap.widgets.BootMenu',
          'items'=>MenuAdjacency::getTree(),
          'encodeLabel'=>false,
        ),
        '<form class="navbar-search pull-right" action=""><input type="text" class="search-query span3" placeholder="Search"></form>',
      ),
    ));
?>

<div id="content-block">
    <div class="container-fluid"> 
    	<?php if(isset($this->breadcrumbs)):?>
    		<?php $this->widget('bootstrap.widgets.BootBreadcrumbs', array(
    			'links'=>$this->breadcrumbs,
    		)); ?><!-- breadcrumbs -->
    	<?php endif?>
        
    	<?php echo $content; ?>
        
     	<div class="clear"></div>
    </div>
</div>
  
<div id="footer">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span2">
                <h4>Community</h4>
                <ul>
                  <li><a href="#">ICU Locations</a></li>
                  <li><a href="#">Patent Conditions</a></li>
                  <li><a href="#">Patent &amp; Family</a></li>
                  <li><a href="#">Visiting in IC</a></li>
                </ul>
            </div>
            <div class="span2">
                <h4>Clinicians</h4>
                <ul>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Seminar &amp; Conference</a></li>
                  <li><a href="#">Education</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">ICUConnect</a></li>
                  <li><a href="#">Links</a></li>
                  <li><a href="#">Research &amp; Quality</a></li>
                  <li><a href="#">NSW ICU Reporting</a></li>
                </ul>
            </div>
            <div class="span2">
                <h4>Quick Links</h4>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Forum</a></li>
                  <li><a href="#">Wiki</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Site Map</a></li>
                  <li><a href="#">Term &amp; Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="span3">
                <h4>Contact Us</h4>
                <ul>
                  <li><span>Call</span>: +61 (2) 4734-1585</li>
                  <li><span>Email</span>: <a href="mailto: info@intensivecare.hsnet.nsw.gov.au">info@intensivecare.hsnet.nsw.gov.au</a></li>
                  <li>&nbsp;</li>
                  <li>Level 1, North Block, Nepean Hospital<br/>Derby Street, Kingswood, NSW 2747</li>
                  <li>&nbsp;</li>
                  <li>Copyright &copy; <?php echo date('Y'); ?> ICCMU.</li>
                </ul>
            </div>
            <div class="span1"></div>
        </div>
    </div><!-- footer -->
</div>

</body>
</html>