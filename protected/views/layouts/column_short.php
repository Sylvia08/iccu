<?php $this->beginContent('//layouts/admin'); ?>
<div class="row-fluid">
    <div class="span3">
        <div class="well sidebar-nav"><?php 
            $this->widget('bootstrap.widgets.BootMenu', array(
              'type'=>'list',
              'items'=>$this->menu
            )); 
        ?></div>
    </div><!-- sidebar -->
    
    <div class="span9">
        <?php echo $content; ?>
    </div><!-- content -->
</div>
<?php $this->endContent(); ?>