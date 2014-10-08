<?php

class AccessFilter extends CFilter
{
    protected function preFilter($filterChain)
    {

        if (!Yii::app()->user->checkAccess('ROLE_ADMIN')) {
            Yii::app()->getRequest()->redirect('/admin',true,302);
        }
        return true; // false — для случая, когда действие не должно быть выполнено
    }

    protected function postFilter($filterChain)
    {

    }
}