<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">
        <?php echo Yii::t('admin','Fields with <span class="required">*</span> are required.'); ?>

    </p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model,'username',array('class'=>'span5','maxlength'=>255)); ?>
    <?php if(Yii::app()->controller->action->id !== 'update') { ?>

	    <?php echo $form->passwordField($model,'password',array('class'=>'span5','maxlength'=>255)); ?>

    <?php } ?>

	<?php echo $form->textFieldControlGroup($model,'first_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldControlGroup($model,'last_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldControlGroup($model,'age',array('class'=>'span5')); ?>

    <?php echo $form->dropDownListControlGroup($model, 'sex', array('male'=>Yii::t('admin','male'), 'female'=>Yii::t('admin','female'), 'none')); ?>

    <?php if(Yii::app()->user->checkAccess('ROLE_SUPERADMIN')) : ?>
        <?php echo $form->dropDownListControlGroup($model, 'role', array('ROLE_USER', 'ROLE_ADMIN','ROLE_SUPERADMIN')); ?>
    <?php endif; ?>


        <?php echo TbHtml::button($model->isNewRecord ? Yii::t('admin','Create') : Yii::t('admin','Save'), array(
                    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
                    'type'=>'submit')); ?>


<?php $this->endWidget(); ?>
