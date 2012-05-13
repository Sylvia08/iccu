<h1><?php echo $category->taxonomy; ?></h1>
<div class="alert alert-block alert-info fade in"><button class="close" data-dismiss="alert">&times;</button><?php echo $category->description ?></div>
<?php if($dataProvider->itemCount):?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>$use_news_layout?'_newsview':'_view',
    'summaryText'=>$use_news_layout?'':''
)); ?>
<?php endif;?>
<?php if($subCategories->itemCount):?>
<div class="row-fluid">
    <h3>The subcategories in this section:</h3>
    <?php $this->widget('zii.widgets.CListView', array(
    	'dataProvider'=>$subCategories,
    	'itemView'=>'_sub-category',
        'summaryText'=>''
    )); ?>
</div>
<?php endif;?>