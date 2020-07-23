<?php  return array (
  'action' => 'Действие',
  'action_desc' => 'Путь к контроллеру, который будет использоваться этим пунктом меню. Путь к контроллеру строится с префиксом в виде путей пространства имен, контроллеров и темы системы управления + значение пути. (Прим.: user/update для пространства имен core будет вида [core_namespace_path]controllers/[mgr_theme]/user/update.class.php)',
  'description_desc' => 'Текст или ключ словаря, который будет использован при генерации описания этой страницы в меню.',
  'handler' => 'Обработчик',
  'handler_desc' => 'Необязательно. Если установлено, не будет учитывать поле действия, но вместо этого запустит JavaSript в момент нажатия на элемент меню.',
  'icon' => 'Значок',
  'icon_desc' => 'Дополнительная иконка/разметка.',
  'lexicon_key' => 'Ключ словаря',
  'lexicon_key_desc' => 'Текст или ключ словаря, которые будет использованы при генерации заголовка этой страницы в меню.',
  'menu_create' => 'Добавить меню',
  'menu_confirm_remove' => 'Вы уверены, что хотите удалить это меню?',
  'menu_err_ae' => 'Меню с таким названием уже существует. Пожалуйста укажите другое название.',
  'menu_err_nf' => 'Меню не найдено!',
  'menu_err_ns' => 'Меню не указано!',
  'menu_err_remove' => 'Произошла ошибка при попытке удалить меню.',
  'menu_err_save' => 'Произошла ошибка при попытке добавить меню.',
  'menu_parent' => 'Родительское меню',
  'menu_parent_err_ns' => 'Родительское меню не указано!',
  'menu_parent_err_nf' => 'Родительское меню не найдено!',
  'menu_remove' => 'Удалить пункт меню',
  'menu_top' => 'Верхнее меню',
  'menu_update' => 'Редактировать меню',
  'menus' => 'Меню',
  'namespace' => 'Пространство имён',
  'namespace_desc' => 'Пространство имен, на котором основан этот пункт меню. Это позволит определять путь к загружаемому контроллеру.',
  'parameters' => 'Параметры',
  'parameters_desc' => 'Любые параметры запроса, которые вы хотите добавить к ссылке, когда нажимаете по ней в меню. (Прим.: &expire=1)',
  'permissions' => 'Права доступа',
  'permissions_desc' => 'Ключ доступа, необходимый для загрузки этого пункта меню.',
  'topmenu' => 'Верхнее меню',
  'topmenu_desc' => 'Здесь вы можете связать «действия» с пунктами верхнего меню системы управления. Просто переместите меню на соответствующие позиции.',
);