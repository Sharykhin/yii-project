<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class AdminController extends CController
{

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu=array();
    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs=array();

    public function init(){
        Yii::app()->getMessages()->basePath=dirname(__FILE__).'/../../../i18n';
        parent::init();

    }

    public function filters()
    {
       return array(
            array(
                'application.modules.admin.components.AccessFilter - index'
            )

        );
    }

    public function getLayoutFile()
    {
        return dirname(__FILE__).'/../views/layouts/layout.php';
    }

}