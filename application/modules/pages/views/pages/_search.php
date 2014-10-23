<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>

<div class="wide form offset-top-20">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

        <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

        <?php echo $form->textFieldControlGroup($model,'url',array('span'=>5,'maxlength'=>255)); ?>

        <?php echo $form->textAreaControlGroup($model,'content',array('rows'=>6,'span'=>8)); ?>

        <?php echo $form->textFieldControlGroup($model,'title',array('span'=>5,'maxlength'=>255)); ?>

        <?php echo $form->textFieldControlGroup($model,'date_created',array('span'=>5,'data-provide'=>'datepicker','data-date-format'=>'dd/mm/yyyy')); ?>

        <?php echo $form->textFieldControlGroup($model,'date_modified',array('span'=>5,'data-provide'=>'datepicker','data-date-format'=>'dd/mm/yyyy')); ?>

        <?php echo TbHtml::button(Yii::t('admin','Search'), array('color' => TbHtml::BUTTON_COLOR_PRIMARY,'type'=>'submit')); ?>

        <?php echo TbHtml::button(Yii::t('admin','Clear'), array('color' => TbHtml::BUTTON_COLOR_INFO,'type'=>'reset')); ?>


    <?php $this->endWidget(); ?>

</div><!-- search-form -->