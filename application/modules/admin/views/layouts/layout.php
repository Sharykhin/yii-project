<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <?php Yii::app()->bootstrap->register(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/admin.css" />
</head>
<body>
<div class="container">
    <?php if(Yii::app()->user->checkAccess('ROLE_ADMIN') && !Yii::app()->user->isGuest) : ?>
        <div class="row">
            <div class="span12">
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="/"><?php echo Yii::app()->name; ?></a>
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <div class="right-position">
                <?php echo TbHtml::buttonDropdown(Yii::app()->user->username, array(
                                                            array('label' => 'Action', 'url' => '#'),
                                                            array('label' => 'Another action', 'url' => '#'),
                                                            array('label' => 'Something else here', 'url' => '#'),
                                                            TbHtml::menuDivider(),
                                                            array('label' => Yii::t('admin','Logout'), 'url' => '/logout'),
                                                            ),
                                                            array('size'=>TbHtml::BUTTON_SIZE_DEFAULT,
                                                                  )); ?>
                </div>
            </div>
        </div>
            </div>
        </div>
        <?php echo TbHtml::breadcrumbs(array(
            'Dashboard'
        )); ?>

    <?php endif; ?>
    <div style="height: 40px;"></div>

        <?php echo $content; ?>

</div>
</body>
</html>
