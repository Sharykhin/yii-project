<?php
return array(
   // 'urlRuleClass'=>'BaseUrlRule',
    'urlFormat'=>'path',
    'showScriptName' => false,
    'rules'=>array(
        'admin/dashboard'=>'admin/default/dashboard',
        'admin/users'=>'users/users/admin',
        'logout'=>'admin/default/logout',
        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
       // '<module:\w+><controller:\w+>/<action:\w+>'=>'<module><controller>/<action>',

    )
);