<div class="row-fluid center-post-item">
  <h2 class="post-headline"><?php echo CHtml::link($data->post_title, $data->url); ?></h2>
  <?php echo $data->post_excerpt?> | <?php echo CHtml::link('Read more', $data->url); ?>
</div>