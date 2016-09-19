<?php
/* 
* Boot-Up CMS (c) SLNETAI.ga
* Config-file
*/

############################################
//Дебагинг крч
ini_set( "display_errors", true );

//Показывать сыллку на админ панель
define( "SHOW_ADMINLINK", true);

//Временная зона http://www.php.net/manual/en/timezones.php
date_default_timezone_set( "Australia/Sydney" );

//Настройки бд 
define( "DB_MS_HOST", "127.0.0.1" );
define( "DB_MS_NAME", "tr" );
define( "DB_DSN", "mysql:host=".DB_MS_HOST.";dbname=".DB_MS_NAME ); //
define( "DB_USERNAME", "root" ); //Логин пользователя бд
define( "DB_PASSWORD", "" ); //Пароль пользователя бд

//Настроки патчей
define( "CLASS_PATH", "classes" ); //Папка с классами
define( "TEMPLATE_PATH", "templates" ); //Папка с шаблоном

//Максимальное количество записей на главной
define( "HOMEPAGE_NUM_ARTICLES", 5 );

//Настройки комментариев вконтакте
define( "VK_APIID", 000000 ); //ApiId приложения вконтакте для комментариев
define( "VK_MAX", 10 ); //Максимальное количество комментариев на странице
define( "VK_WIDTH", 665 ); //Ширина блока комментариев

//Имя сайта
define( "SITE_NAME", "Boot-Up");

//Настройка админ аккаунта
define( "ADMIN_USERNAME", "admin" ); //Логин админа
define( "ADMIN_PASSWORD", "admin" ); //Пароль админа
############################################

// Если вы криворукий - это не трогать!
require( CLASS_PATH . "/Article.php" ); // Подключаем класс для работы с записями
require( CLASS_PATH . "/Category.php" ); // Подключаем класс для работы с категориями 

// И это тоже!
function handleException( $exception ) { // Хандлер ошибок
  include TEMPLATE_PATH . "/include/header.php";
  echo "<div class='alert alert-danger'> <strong>Error!</strong> When load page error detected: " . $exception->getMessage() . "</div>";
  error_log( $exception->getMessage() );
  include TEMPLATE_PATH . "/include/footer.php";
}

// И это!!
set_exception_handler( "handleException" );
?>