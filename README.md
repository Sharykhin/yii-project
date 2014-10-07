Installation
-----------

    Run: init.sh

    Run: composer install

Dev Installation
----------------

    Run: init.dev.sh

    Run: composer install

Dev Installation create all necessary directories exclude tests

Go to application directory

    Run: php yiic migrate

If composer doesn't exist. Install it: https://getcomposer.org/

To analyze your code by checkstyle, use phing http://www.phing.info/

    Run: phing -f check.xml

If you want to use light rules, as default by Jenkins. Change in dev/phing/config path of phpcs.standards.file
to ${project.basedir}/standards/phpcs.xml


Documentation of YiiStrap: http://www.getyiistrap.com/
Documentation of Bootstrap 2.3.2: http://getbootstrap.com/2.3.2/components.html#navbar
