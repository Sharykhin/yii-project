<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldControlGroup($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldControlGroup($model,'username',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'first_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldControlGroup($model,'last_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldControlGroup($model,'age',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'sex',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldControlGroup($model,'created',array('class'=>'span5')); ?>

	<div class="form-actions">
        <?php echo TbHtml::button(Yii::t('admin','Search'), array('color' => TbHtml::BUTTON_COLOR_PRIMARY,'type'=>'submit')); ?>

	</div>

<?php $this->endWidget(); ?>
