<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span3">
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
    <div class="span3">
        <div class="row-fluid">
            <h3>Search the news archive</h3>
            <form class="form-horizontal">
              <fieldset>
                <div class="control-group">
                    <div class="input-append">
                      <input style="width: 160px;" id="appendedInputButton" size="56" type="text" placeholder="Search"><button class="btn btn-info" type="button">Search</button>
                    </div>
                </div>
                
              </fieldset>
            </form>
        </div>
        <div class="row-fluid">
            <h3>Subscribe</h3>
            <div><i class="icon-envelope"></i> <a href="#">Email subscription</a></div>
            <div><i class="icon-rss"></i> <a href="#">RSS feeds</a></div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>