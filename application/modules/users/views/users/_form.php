<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">
        <?php echo Yii::t('admin','Fields with <span class="required">*</span> are required.'); ?>

    </p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'first_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'last_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'age',array('class'=>'span5')); ?>

    <?php echo $form->dropDownListRow($model, 'sex', array('male'=>Yii::t('admin','male'), 'female'=>Yii::t('admin','female'), 'none')); ?>

    <?php if(Yii::app()->user->checkAccess('ROLE_SUPERADMIN')) : ?>
        <?php echo $form->dropDownListRow($model, 'role', array('ROLE_USER', 'ROLE_ADMIN','ROLE_SUPERADMIN')); ?>
    <?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('admin','Create') : Yii::t('admin','Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
