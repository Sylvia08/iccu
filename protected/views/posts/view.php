<div class="row-fluid">
  <h2><?php echo $model->post_title; ?></h2>
  <div class="row-fluid post-meta">
    <span class="post-datetime"><i class="icon-calendar"></i> <?php echo Yii::app()->dateFormatter->formatDateTime($model->post_date,'medium',null); ?></span>
    <?php if(isset($model->category)): ?>
    <span class="post-category">
        <i class="icon-tag"></i> 
        <?php 
    	    echo CHtml::link($model->category, array('/posts', 'category'=>$model->category)); 
        ?>
    </span>
    <?php endif; ?>
  </div>
  <?php echo $model->post_content?>
</div>