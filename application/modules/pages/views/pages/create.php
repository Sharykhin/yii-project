<?php
/* @var $this PagesController */
/* @var $model Pages */
?>


<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('admin','Dashboard') => '/admin/dashboard',
        Yii::t('admin','Pages')=>'/admin/pages',
        Yii::t('admin','Create')
    ),
)); ?>

<div class="btn-toolbar">

    <?php echo TbHtml::buttonDropdown(Yii::t('admin','Action'), array(
        array('label' => Yii::t('admin','Management'), 'url' => array('admin')),
        array('label' => Yii::t('admin','List'), 'url' => array('index')),
    ), array('size'=>TbHtml::BUTTON_SIZE_LARGE,'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>

</div>

<h1><?php echo Yii::t('admin','Create Pages') ?></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>