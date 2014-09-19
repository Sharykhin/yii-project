    <h1><?php echo Yii::t('app', 'Welcome to Grant\'s father.'); ?></h1>
    <a href="#" class="thumbnail" rel="tooltip" data-title="Tooltip">
        <img class="logoGrants" src="/public/images/img1.jpg" alt="">
    </a>
    <p class="desc">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type
        specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged.
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem
        Ipsum passages, and more recently with desktop publishing software like Aldus
        PageMaker including versions of Lorem Ipsum.<br/>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type
        specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged.
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem
        Ipsum passages, and more recently with desktop publishing software like Aldus
        PageMaker including versions of Lorem Ipsum.
    </p>
    <p class="desc">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type
        specimen book. It has survived not only five centuries, but also the leap into

    </p>
    <p style="text-align: center">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>Yii::t('app','Start'),
        'type'=>'success', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'large', // null, 'large', 'small' or 'mini'
        'htmlOptions'=>array('href'=>'/grunts/category'),
    )); ?>
    </p>
