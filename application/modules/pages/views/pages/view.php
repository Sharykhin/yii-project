<?php
/* @var $this PagesController */
/* @var $model Pages */
?>

<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('admin','Dashboard') => '/admin/dashboard',
        Yii::t('admin','Pages')=>'/admin/pages',
        Yii::t('admin','View')
    ),
)); ?>

    <div class="btn-toolbar">

        <?php echo TbHtml::buttonDropdown(Yii::t('admin','Action'), array(
            array('label' => Yii::t('admin','Management'), 'url' => array('admin')),
            array('label' => Yii::t('admin','List'), 'url' => array('index')),
            array('label' => Yii::t('admin','Edit'), 'url' => array('update','id'=>$model->id)),
            array('label' => Yii::t('admin','Create'), 'url' => array('create')),
            TbHtml::menuDivider(),
            array('label' => Yii::t('admin','Delete'), 'url' => array('delete'),'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('admin','Are you sure you want to delete this item?')))
        ), array('size'=>TbHtml::BUTTON_SIZE_DEFAULT,'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>

    </div>

<h1><?php echo Yii::t('admin','View Page') ?>:  <?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'url',
        array(
            'name'=>'content',
            'type' => 'raw',
        ),
		'title',
		'date_created',
		'date_modified',
	),
)); ?>