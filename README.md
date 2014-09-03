Installation
-----------

    Run: init.sh

    Run: composer install

Go to application directory

    Run: php yiic migrate

If composer doesn't exist. Install it: https://getcomposer.org/

To analyze your code by checkstyle, use phing http://www.phing.info/

    Run: phing -f check.xml

If you want to use light rules, as default by Jenkins. Change in dev/phing/config path of phpcs.standards.file
to ${project.basedir}/standards/phpcs.xml



