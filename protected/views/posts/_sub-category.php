<dl class="feature">
    <dt><?php echo CHtml::link($data->taxonomy, array('/posts', 'category'=>$data->taxonomy)); ?></dt>
    <dd><?php echo $data->excerpt; ?></dd>    
</dl>