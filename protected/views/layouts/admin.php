<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" />
</head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div id="mainmenu">
    		<?php 
    		$module = Yii::app()->controller->module->id;
    		$controller = Yii::app()->controller->id;
    		$this->widget('bootstrap.widgets.BootNavbar', array(
                'fixed'=>false,
                'brand'=>'ICCMU Administration',
                'brandUrl'=>Yii::app()->request->baseUrl.'/dashboard',
                'collapse'=>true, // requires bootstrap-responsive.css
                'items'=>array(
                    array(
                        'class'=>'bootstrap.widgets.BootMenu',
                        'items'=>array(
                            array('label'=>'Site', 'url'=>'#', 'active'=>$module=='/dashboard'&&$controller=='site'?true:false),
                            array('label'=>'Users', 'url'=>'#', 'items'=>array(
                               array('label'=>'User Manager', 'url'=>array('/user/admin')),
                               array('label'=>'Right Manager', 'url'=>array('/rights'))
                            ), 'active'=>$module=='user'||$module=='rights'?true:false),  
                            array('label'=>'Menus', 'url'=>array('/dashboard/menuadjacency'), 'active'=>$module=='dashboard'&&$controller=='menuadjacency'?true:false),
                            array('label'=>'Content', 'url'=>'#', 'items'=>array(
                                array('label'=>'Post Manager', 'url'=>array('/dashboard/posts/admin')),
                                array('label'=>'Category Manager', 'url'=>array('/dashboard/termtaxonomy/admin')),
                                '---',
                                array('label'=>'Media Manager', 'url'=>'#')
                            ), 'active'=>$module=='dashboard'&&($controller=='posts'||$controller=='termtaxonomy')?true:false),
                        ),
                    ),
                    array(
                      'class'=>'bootstrap.widgets.BootMenu',
                      'htmlOptions'=>array('class'=>'pull-right'),
                      'items'=>array(
                        array('label'=>'View Site', 'url'=>Yii::app()->request->baseUrl),
                        '---',
                        array('label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'url'=>Yii::app()->getModule('user')->logoutUrl),
                      ),
                    ),
                ),
   		  ));
          ?>
    	</div>
   	</div>
</div><!-- navbar -->
	
<div class="container-fluid" id="page">
    <div class="row-fluid">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.BootBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		    'homeLink' => CHtml::link('Dashboard', Yii::app()->request->baseUrl.'/dashboard'),
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    </div>
    
	<?php echo $content; ?>

	<div class="clear"></div>
	
	<div id="footer">
        <div class="container">
            Copyright &copy; <?php echo date('Y'); ?> ICCMU.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
        </div>
    </div><!-- footer -->
</div><!-- page -->

</body>
</html>
