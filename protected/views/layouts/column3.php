<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span3 visible-desktop .visible-tablet">
    	<div id="sidebar">
    	<?php
        $this->widget('application.extensions.MTreeView.MTreeView',array(
            'collapsed'=>false,
            'animated'=>'fast',
            //---MTreeView options from here
            'table'=>'menu_adjacency',//what table the menu would come from
            'hierModel'=>'adjacency',//hierarchy model of the table
            'conditions'=>array('visible=:visible',array(':visible'=>1)),//other conditions if any                                    
            'fields'=>array(//declaration of fields
            'text'=>'title',//no `text` column, use `title` instead
            'alt'=>false,//skip using `alt` column
            'id_parent'=>'parent_id',//no `id_parent` column,use `parent_id` instead
            'task'=>false,
            'icon'=>false,
            ),
        ));
        ?>
    	</div><!-- sidebar -->
    </div>

    <div class="span6">
   		<?php echo $content; ?>
    </div>
    
    <div id="right-sidebar" class="span3">
   		<div class="row-fluid">
            <h3>Send us your feedback</h3>
            <div class="sidebar-content-block">Please tell us what's on your mind by completing the <a href="#" rel="tooltip" data-title="underconstruction">feedback form</a>. 
            We'll be sure to use your information to help us create a better service.</div>
        </div>
        <div class="row-fluid">
            <h3>Useful links</h3>
            <div class="sidebar-content-block">
                <ul>
                    <li><a href="#">An useful external link</a></li>
                    <li><a href="#">Another useful external link</a></li>
                    <li><a href="#">Another useful external link</a></li>
                </ul>
            </div>
        </div>
        <div class="row-fluid">
            <div class="sidebar-content-block">
                <a href="#" class="thumbnail" rel="tooltip" data-title="Promo links - Graphic promos">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>./images/promos_image.png" alt="promote image"/>
                 </a>
            </div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>