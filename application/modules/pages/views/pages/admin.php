<?php
/* @var $this PagesController */
/* @var $model Pages */



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pages-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('admin','Dashboard') => '/admin/dashboard',
        Yii::t('admin','Pages'),
    ),
)); ?>


<h1><?php echo Yii::t('admin','Manage Pages');?></h1>

<p>
    <?php echo Yii::t('admin','You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.') ?>

</p>

    <div class="btn-toolbar">
        <?php echo TbHtml::buttonDropdown(Yii::t('admin','Action'), array(
            array('label' => Yii::t('admin','Create'), 'url' => array('create')),
            array('label' => Yii::t('admin','List'), 'url' => array('index')),
        ), array('size'=>TbHtml::BUTTON_SIZE_LARGE,'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>


    </div>

<?php echo CHtml::link(Yii::t('admin','Advanced Search'),'#',array('class'=>'search-button btn')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'pages-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'url',
        array(
            'name'=>'content',
            'header'=>'Content',
            'value'=>function($item){
                   return $this->words_limit($item->content,50,'...') ;
                }
        ),

		'title',
		'date_created',
		'date_modified',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>