<?php
$translations =
 array(
    'Content'=>'Содержимое',
    'Incorrect username or password.'=>'Неверный логин или пароль',
    'Remember me next time'=>'Запомнить меня',
    'Sign In Form'=>'Форма входа',
    'Sign In'=>'Войти',
    'Please fill out the following form with your login credentials'=>'Пожалуйста, заполните поля, используя ваши данные для входа',
    'Fields with {span} are required.'=>'Поля отмеченные {span} обязательны.',
    'Dashboard'=>'Панель управления',
    'Username'=>'Логин',
    'Password'=>'Пароль',
    'Delete'=>'Удалить',
    'Edit'=>'Редактировать',
    'Clear'=>'Очистить',
    'Role'=>'Роль',
    'Management'=>'Управление',
    'List'=>'Список',
    'Users'=>'Пользователи',
    'Settings'=>'Настройки',
    'View'=>'Просмотр',
    'Site'=>'Сайт',
    'Modules'=>'Модули',
    'Logout'=>'Выйти',
    'Welcome to admin dashboard'=>'Добро пожаловать в панель управления администратора',
    'First Name'=>'Имя',
    'Last Name'=>'Фамилия',
    'Age'=>'Возраст',
    'Sex'=>'Пол',
    'Created'=>'Создан',
    'Action'=>'Действия',
    'List Users'=>'Список пользователей',
    'Create User'=>'Создать пользователя',
    'Manage Users'=>'Управление пользователями',
    'You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.'=>'Вы можете использовать для сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
или <b>=</b>) для более детального поиска.',
    'Advanced Search'=>'Расширенный поиск',
    'Search'=>'Поиск',
    'Create'=>'Создать',
    'Save'=>'Сохранить',
    'Fields with <span class="required">*</span> are required.'=>'Поля отмеченные <span class="required">*</span> обязательны.',
    'male'=>'Мужской',
    'female'=>'Женский',
    'Update User'=>'Редактирование пользователя',
    'View User'=>'Просмотр пользователя',
    'Delete User'=>'Удалить пользователя',
    'Are you sure you want to delete this item?'=>'Вы уверены что хотите удалить эут запись?',
    'Link'=>'Ссылка',
    'Title'=>'Заголовок',
    'Content'=>'Содержимое',
    'Modified'=>'Изменен',
    'On Main Page'=>'Отображать на главной',
    'Create Content'=>'Создать материал',
    'Manage Contents'=>'Управление содержимым',
    'YES'=>'Да',
    'NO'=>'Нет',
    'View Content'=>'Просмотр материала',
    'Update Content'=>'Редактировать материал',
    'Delete Content'=>'Удалить материал',
    'Create Settings'=>'Создать настройки',
    'Manage Settings'=>'Управление настройками',
    'Name'=>'Название',
    'Value'=>'Значение',
    'Type'=>'Тип',
    'Update Settings'=>'Редактировать настройки',
    'Delete Settings'=>'Удалить настройки',
    'View Settings'=>'Просмотр настроек',
    'Clear Filter'=>'Очистить фильр',
    ''=>'',
    ''=>'',
    ''=>'',
    ''=>'',


);

$modulePath = dirname(__FILE__).'/../../modules';
$modules = scandir($modulePath);
foreach($modules as $module) :
    if(file_exists($modulePath.'/'.$module.'/i18n/ru/admin.php') && ($module !== '.' && $module !== '..')){
        $translations = array_merge(require $modulePath.'/'.$module.'/i18n/ru/admin.php',$translations);
    }
endforeach;

return  $translations;