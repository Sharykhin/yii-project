

<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('admin','Dashboard') => '/admin/dashboard',
        Yii::t('admin','Users')=>'/admin/users',
        Yii::t('admin','View')
    ),
)); ?>

<h1><?php echo Yii::t('admin','View User') ?>  <?php echo $model->username; ?></h1>

<div class="btn-toolbar">

    <?php echo TbHtml::buttonDropdown(Yii::t('admin','Action'), array(
        array('label' => Yii::t('admin','Management'), 'url' => '/admin/users'),
        array('label' => Yii::t('admin','Create'), 'url' => '/admin/users/create'),
        array('label' => Yii::t('admin','List'), 'url' => '/admin/users/index'),
        array('label' => Yii::t('admin','Edit'), 'url' => '/admin/users/update', 'linkOptions'=>array('submit'=>array('update','id'=>$model->id))),
        TbHtml::menuDivider(),
        array('label' => Yii::t('admin','Delete'), 'url' => '/admin/users/delete','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('admin','Are you sure you want to delete this item?'))),
    ), array('size'=>TbHtml::BUTTON_SIZE_LARGE,'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>

</div>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'first_name',
		'last_name',
		'age',
		'sex',
		'created',
	),
)); ?>
