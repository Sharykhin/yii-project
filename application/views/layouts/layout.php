<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="keywords" content="western shop, free website templates, CSS, HTML" />
    <meta name="description" content="Western Shop is a free website template from Ftemplate.ru" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_banner_wrapper">
    <div id="templatemo_banner">
        <div id="templatemo_menu">
            <ul>
                <li><a href="#" class="current">Home</a></li>
                <li><a href="http://www.Ftemplate.ru" target="_parent">Templates</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

    </div> 	<!-- end of banner -->
</div> <!-- end of banner wrapper -->

<div id="templatemo_content_wrapper">
    <div id="templatemo_content">

        <div id="main_column">

            <?php echo $content; ?>

        </div> <!-- end of main column -->

        <div id="side_column">

            <div class="section_w350">
                <div class="news_box">

                    <h3>News</h3>

                    <h4><a href="#">Etiam et metus quam</a></h4>
                    <p>Quisque et fermentum magna. Maecenas egestas ipsum tempus mauris sodales non convallis arcu dictum.</p>

                    <div class="cleaner_h10"></div>

                    <h4><a href="#">Duis vitae felis nec purus</a></h4>
                    <p>Pellentesque a pellentesque urna. Ut fermentum tristique metus, in hendrerit risus scelerisque.</p>

                </div>
            </div>

        </div> <!-- end of side column -->

        <div id="templatemo_footer">

            Copyright © 2024 <a href="http://www.Ftemplate.ru" target="_parent">Your Company Name</a> | Designed by <a href="http://www.Ftemplate.ru" target="_parent">Free CSS Templates</a>

            <div class="cleaner_h20"></div>

            <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>

        </div> <!-- end of footer -->
        <div class="cleaner"></div>

    </div> <!-- end of content -->
</div> <!-- end of content wrapper -->
</body>
</html>