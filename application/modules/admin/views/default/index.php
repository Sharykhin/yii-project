
<div class="loginForm sign-in-form">
    <?php
    /* @var $this SiteController */
    /* @var $model LoginForm */
    /* @var $form CActiveForm  */

    $this->pageTitle=Yii::app()->name . ' - Login';
    $this->breadcrumbs=array(
        'Sign In',
    );
    ?>


    <div class="row">
        <div class="span6">
        <fieldset>
            <legend><?php echo Yii::t('admin','Sign In Form'); ?></legend>
            <p><?php echo Yii::t('admin','Please fill out the following form with your login credentials'); ?>:</p>
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>

            <p class="note"><?php echo Yii::t('admin','Fields with <span class="required">*</span> are required.'); ?></p>

            <div class="">
                <?php echo $form->labelEx($model,'username'); ?>
                <?php echo $form->textField($model,'username',array('placeholder'=>'Mr. Joens','class'=>'span6')); ?>
                <?php echo $form->error($model,'username',array('class'=>'alert alert-error span6 form-error')); ?>

            </div>

            <div class="">
                <?php echo $form->labelEx($model,'password'); ?>
                <?php echo $form->passwordField($model,'password',array('placeholder'=>'*******','class'=>'span6')); ?>
                <?php echo $form->error($model,'password',array('class'=>'alert alert-error span6 form-error')); ?>
            </div>

            <div class="rememberMe">
                <?php echo $form->checkBox($model,'rememberMe',array('class'=>'remember-me')); ?>
                <?php echo $form->label($model,'rememberMe'); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
            </div>

            <div class="buttons">
                <?php echo TbHtml::button(Yii::t('admin','Sign In'),
                    array('color' => TbHtml::BUTTON_COLOR_PRIMARY,
                           'size' => TbHtml::BUTTON_SIZE_LARGE,
                            'class'=>'offset-top-15',
                            'type'=>'submit'));
                ?>

            </div>

            <?php $this->endWidget(); ?>
        </fieldset>
        </div>
    </div>

</div>
