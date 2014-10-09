<?php

$this->menu=array(
	array('label'=>Yii::t('admin','Create User'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('users-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('admin','Dashboard') => '/admin/dashboard',
        Yii::t('admin','Users'),
    ),
)); ?>

<h1><?php echo Yii::t('admin','Manage Users') ?></h1>

<p>
    <?php echo Yii::t('admin','You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.') ?>

</p>

<div class="btn-toolbar">
    <?php echo TbHtml::buttonDropdown(Yii::t('admin','Action'), array(
        array('label' => Yii::t('admin','Create'), 'url' => '/admin/users/create'),
        array('label' => Yii::t('admin','List'), 'url' => '/admin/users/index'),
    ), array('size'=>TbHtml::BUTTON_SIZE_LARGE,'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>


</div>

<?php echo CHtml::link(Yii::t('admin','Advanced Search'),'#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<!-- search-form -->
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider' => $model->search(),
    'id'=>'users-grid',
    'filter' => $model,
    'template' => "{items}",
    'columns' => array(
        array(
            'name' => 'id',
            'header' => 'ID',
            'htmlOptions' => array('color' =>'width: 60px'),
        ),
        array(
            'name' => 'username',
            'header' => Yii::t('admin','Username'),
        ),
        array(
            'name' => 'first_name',
            'header' => Yii::t('admin','First Name'),
        ),
        array(
            'name' => 'last_name',
            'header' => Yii::t('admin','Last Name'),
        ),
        array(
            'name'=>'age',
            'header'=>Yii::t('admin','Age')
        ),
        array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
    ),
)); ?>

