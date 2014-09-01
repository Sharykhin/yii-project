cd application
php codecept.phar bootstrap
cd ..
mkdir resources/runtime
chmod 777 -R resources/runtime
chmod 777 -R public/assets
rm .gitignore
mv simple.gitignore .gitignore

cd application/tests/unit
echo "\$yiit=dirname(__FILE__).'/../../../core/framework/yiit.php';" >> _bootstrap.php
echo "\$config=dirname(__FILE__).'/../../config/test.php';" >> _bootstrap.php
echo "require_once(\$yiit);" >> _bootstrap.php
echo "Yii::createWebApplication(\$config);" >> _bootstrap.php