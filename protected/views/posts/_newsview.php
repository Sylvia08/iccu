<div class="row-fluid center-post-item">
  <h2 class="post-headline"><?php echo CHtml::link($data->post_title, $data->url); ?></h2>
  <div class="row-fluid post-meta">
    <span class="post-datetime"><i class="icon-calendar"></i> <?php echo Yii::app()->dateFormatter->formatDateTime($data->post_date,'medium',null); ?></span>
    <?php if(isset($data->category)): ?>
    <span class="post-category">
        <i class="icon-tag"></i> 
        <?php echo CHtml::link($data->category, array('/posts', 'category'=>$data->category)); ?>
    </span>
    <?php endif; ?>
  </div>
  <?php echo $data->post_excerpt?> | <?php echo CHtml::link('Read more', $data->url); ?>
</div>