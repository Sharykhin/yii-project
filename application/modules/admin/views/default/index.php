
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
            <legend>Sign In Form</legend>
            <p>Please fill out the following form with your login credentials:</p>
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>

            <p class="note">Fields with <span class="required">*</span> are required.</p>

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
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo $form->label($model,'rememberMe'); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
            </div>

            <div class="buttons">
                <?php echo TbHtml::button('Sign In',
                    array('color' => TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE));
                ?>

            </div>

            <?php $this->endWidget(); ?>
        </fieldset>
        </div>
    </div>

</div>
