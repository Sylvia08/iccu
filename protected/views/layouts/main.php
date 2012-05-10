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
    
    $items = MenuAdjacency::getTree();
    
    $this->widget('bootstrap.widgets.BootNavbar', array(
      'fixed'=>false,
      'collapse'=>true, // requires bootstrap-responsive.css
      'items'=>array(
        array(
          'class'=>'bootstrap.widgets.BootMenu',
          'items'=>$items,
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
            <div class="span3">
                <h4>The ICCMU Newsletter</h4>
                <div>Subscribe to our email newsletter for ICU news &amp; events.</div><br/>
                <form class="form-horizontal">
                  <fieldset>
                    <div class="control-group">
                        <div class="input-append">
                          <input style="width: 160px;" id="appendedInputButton" size="56" type="text" placeholder="email address"><button class="btn btn-info" type="button">Subscribe</button>
                        </div>
                    </div>
                    
                  </fieldset>
                </form>
            </div>
            <?php
                 foreach($items as $item){
                     if($item['items']){
                         echo '<div class="span2">';
                         echo '<h4>'.$item['label'].'</h4><ul>';
                         foreach($item['items'] as $child){
                             echo '<li><a href="'.Yii::app()->request->baseUrl.$child['url'].'">'.$child['label'].'</a></li>';
                         }
                         echo '</ul></div>';
                     }
                 }
             ?>
            <div class="span3">
                <h4>Contact Us</h4>
                <ul>
                  <li><span>Call</span>: +61 (2) 4734-1585</li>
                  <li><span>Email</span>: <a href="mailto: info@intensivecare.hsnet.nsw.gov.au">info@intensivecare.hsnet.nsw.gov.au</a></li>
                  <li>&nbsp;</li>
                  <li>Level 1, North Block, Nepean Hospital<br/>Derby Street, Kingswood, NSW 2747</li>
                  <li>&nbsp;</li>
                </ul>
            </div>
        </div>
        <div class="copyright row-fluid">
           <div class="span4">Copyright &copy; <?php echo date('Y'); ?> ICCMU. All Rights Reserved.</div>
           <div class="span4">
               <a href="#">Term of Service</a> &middot;
               <a href="#">Privacy Policy</a> &middot;
               <a href="#">Site Map</a>
           </div>
           <div class="span4">Designed by <a href="http://uws.edu.au">UWS</a> - WE Team.</div>
        </div>
    </div><!-- footer -->
</div>

</body>
</html>