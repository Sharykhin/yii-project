<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'pages-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">
        <?php echo Yii::t('admin','Fields with {span} are required.',array('{span}'=>'<span class="required">*</span>')); ?>
    </p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'title',array('span'=>5,'maxlength'=>255,'class'=>'title-field')); ?>

            <?php echo $form->textFieldControlGroup($model,'url',array('span'=>5,'maxlength'=>255,'class'=>'url-field')); ?>

            <?php echo $form->textAreaControlGroup($model,'content',array('rows'=>6,'span'=>8,'id'=>'editor')); ?>

    <?php echo TbHtml::button($model->isNewRecord ? Yii::t('admin','Create') : Yii::t('admin','Save'), array(
        'color' => TbHtml::BUTTON_COLOR_PRIMARY,
        'type'=>'submit')); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<script>

</script>