<?php
$category = $model->category;
if(isset($category))
    $this->breadcrumbs=array(
    	$category=>array('index?category='.$category),
    	$model->post_title,
    );
else 
    $this->breadcrumbs=array($model->post_title);
?>
<div class="row-fluid">
  <h1><?php echo $model->post_title; ?></h1>
  <div class="row-fluid">
    <div class="post-datetime"><?php echo $model->post_date; ?></div>
    <?php if(isset($model->category)): ?>
    <div class="post-category"><?php echo $model->category; ?></div>
    <?php endif; ?>
  </div>
  <?php echo $model->post_content?>
</div>