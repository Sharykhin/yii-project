


<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('admin','Dashboard') => '/admin/dashboard',
        Yii::t('admin','Users')=>'/admin/users',
        Yii::t('admin','Create')
    ),
)); ?>

<h1><?php echo Yii::t('admin','Create User') ?></h1>
<div class="btn-toolbar">

    <?php echo TbHtml::buttonDropdown(Yii::t('admin','Action'), array(
        array('label' => Yii::t('admin','Management'), 'url' => '/admin/users'),
        array('label' => Yii::t('admin','List'), 'url' => '/admin/users/index'),
    ), array('size'=>TbHtml::BUTTON_SIZE_LARGE,'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>

</div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>