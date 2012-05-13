<?php
$this->breadcrumbs=array(
	'Category Manager'
);

$this->menu=array(
    array('label'=>'Category Manager'),
    array('label'=>'Manage Categories', 'icon'=>'cog', 'url'=>array('admin'), 'active'=>'true'),
    array('label'=>'Create Category', 'icon'=>'pencil', 'url'=>array('create'), 
//           'linkOptions'=>array('onclick'=>'openModal($(this).attr("href"),"categoryModal", "Create Category"); return false;')
    ),
);
?>

<h2>Manage Categories</h2>
<?php
    Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".alert").animate({opacity: 1.0}, 5000).fadeOut("slow");',
       CClientScript::POS_READY
    );
?>
<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

<?php $this->widget('bootstrap.widgets.BootGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        array('name'=>'term_taxonomy_id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 50px')),
        array('name'=>'taxonomy', 'header'=>'Category'),
        array('name'=>'description', 'header'=>'Description'),
        array('name'=>'parent', 'header'=>'Parent ID', 'htmlOptions'=>array('style'=>'width: 50px')),
        array(
            'class'=>'bootstrap.widgets.BootButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
            'template'=>'{update}{delete}',
//             'buttons'=>array
//             (
//                 'update' => array
//                 (
//                     'click'=>'function(){openModal($(this).attr("href"),"categoryModal", "Update Category"); return false;}',
//                 )
//             ),
        ),
    ),
)); ?>
<!--
<?php //$this->beginWidget('bootstrap.widgets.BootModal', array('id'=>'categoryModal')); ?>
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3 id="modal-title">Modal Title</h3>
</div>
 
<div class="modal-body">
    <?php //echo $this->renderPartial('_ajaxform', array('model'=>$model)); ?>
</div>
 
<div class="modal-footer">
    <?php /* $this->widget('bootstrap.widgets.BootButton', array(
        'type'=>'primary',
        'label'=>'Create',
        'url'=>'#',
        'htmlOptions'=>array('id'=>'cModalSubmit'),
    )); 
    $this->widget('bootstrap.widgets.BootButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); */ ?>
</div>
<?php //$this->endWidget(); ?>Category Modal--> 

<script type="text/javascript">/*
function sendAjaxRequest(url, request_type, modalId)
{
	jQuery.ajax({
        'url': url,
        'data': $('#'+modalId+' div.modal-body form').serialize(),
        'type': request_type,
        'dataType': 'json',
        'success': function(data)
                   {
                       if (data.status == 'failure')
                       {
                           $('#'+modalId+' div.modal-body').html(data.div);
                           // Here is the trick: on submit-> once again this function!
                           $('#'+modalId+' div.modal-body form').submit(modalId);
                       }
                       else
                       {
                           $('#'+modalId+' div.modal-body').html(data.div);
                           location.reload(true);
                       }
                   }
    });
    return false;
}

function openModal(url, modalId, modalTitle)
{
	sendAjaxRequest(url, 'get', modalId);
	$('#modal-title').html(modalTitle);
	$('#cModalSubmit').html(modalTitle=="Update Category"?"Save changes":"Create");
	$('#cModalSubmit').click(function(){sendAjaxRequest(url, 'post', modalId);});
    $('#'+modalId).modal();
    return false;
} */
</script>