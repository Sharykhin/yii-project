<?php
/* @var $this PagesController */
/* @var $model Pages */
?>


<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('admin','Dashboard') => '/admin/dashboard',
        Yii::t('admin','Pages')=>'/admin/pages',
        Yii::t('admin','Edit')
    ),
)); ?>

    <div class="btn-toolbar">

        <?php echo TbHtml::buttonDropdown(Yii::t('admin','Action'), array(
            array('label' => Yii::t('admin','Management'), 'url' => array('admin')),
            array('label' => Yii::t('admin','List'), 'url' => array('index')),
            array('label' => Yii::t('admin','Create'), 'url' => array('create')),
            array('label' => Yii::t('admin','View'), 'url' => array('create','id'=>$model->id)),
            TbHtml::menuDivider(),
            array('label' => Yii::t('admin','Delete'), 'url' => array('delete'),'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('admin','Are you sure you want to delete this item?')))
        ), array('size'=>TbHtml::BUTTON_SIZE_DEFAULT,'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>

    </div>
    <h1><?php echo Yii::t('admin','Update Page') ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>