<?php
$rules = array(
        'logout'=>'admin/default/logout',
        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>'
    );

$modulePath = dirname(__FILE__).'/../modules';
$modules = scandir($modulePath);
foreach($modules as $module) :
    if(file_exists($modulePath.'/'.$module.'/config/routes.php')){
        $rules = array_merge(require $modulePath.'/'.$module.'/config/routes.php',$rules);
    }
endforeach;

return array(
   // 'urlRuleClass'=>'BaseUrlRule',
    'urlFormat'=>'path',
    'showScriptName' => false,
    'rules'=>$rules

);