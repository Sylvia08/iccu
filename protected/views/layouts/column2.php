<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span3">
    	<div id="sidebar">
    	<?php
        $this->widget('application.extensions.MTreeView.MTreeView',array(
            'collapsed'=>true,
            'animated'=>'fast',
            //---MTreeView options from here
            'table'=>'menu_adjacency',//what table the menu would come from
            'hierModel'=>'MenuAdjacency',//hierarchy model of the table
            'conditions'=>array('visible=:visible',array(':visible'=>1)),//other conditions if any                                    
            'fields'=>array(//declaration of fields
            'text'=>'title',//no `text` column, use `title` instead
            'alt'=>false,//skip using `alt` column
            'id_parent'=>'parent_id',//no `id_parent` column,use `parent_id` instead
            'task'=>false,
            'icon'=>false,
            'url'=>array('/menuAdjacency/view',array('id'=>'id'))
            ),
        ));
        ?>
    	</div><!-- sidebar -->
    </div>

    <div class="span9">
   		<?php echo $content; ?>
    </div>
    
</div>
<?php $this->endContent(); ?>