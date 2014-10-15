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
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo Yii::t('admin','Management'); ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/users"><span class="icon-user"></span> <?php echo Yii::t('admin','Users'); ?></a> </li>
                            <li><a href="/admin/pages"><span class="icon-list-alt"></span> <?php echo Yii::t('admin','Pages'); ?></a> </li>
                        </ul>
                    </li>
                    <li><a href="/admin/dashboard"><?php echo Yii::t('admin','Dashboard'); ?></a></li>
                </ul>
                <form class="navbar-search pull-left">
                    <input type="text" class="search-query" placeholder="Search">
                </form>
                <div class="right-position">
                    <ul class="nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo Yii::app()->user->username ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/logout"><span class="icon-off"></span> <?php echo Yii::t('admin','Logout'); ?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            </div>
        </div>
<!--        --><?php //echo TbHtml::breadcrumbs(array(
//            'Dashboard'
//        )); ?>

    <?php endif; ?>
    <div style="height: 40px;"></div>

        <?php echo $content; ?>

</div>
</body>
</html>
