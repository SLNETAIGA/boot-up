<?php
if( isset($_GET['submit']) ){
	$cfg = '<?php
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
define( "DB_MS_HOST", "'.$_GET['dbhost'].'" );
define( "DB_MS_NAME", "'.$_GET['dbname'].'" );
define( "DB_DSN", "mysql:host=".DB_MS_HOST.";dbname=".DB_MS_NAME ); //
define( "DB_USERNAME", "'.$_GET['dblog'].'" ); //Логин пользователя бд
define( "DB_PASSWORD", "'.$_GET['dbpass'].'" ); //Пароль пользователя бд

//Настроки патчей
define( "CLASS_PATH", "classes" ); //Папка с классами
define( "TEMPLATE_PATH", "templates" ); //Папка с шаблоном

//Максимальное количество записей на главной
define( "HOMEPAGE_NUM_ARTICLES", 5 );

//Настройки комментариев вконтакте
define( "VK_APIID", '.$_GET['vkapi'].' ); //ApiId приложения вконтакте для комментариев
define( "VK_MAX", 10 ); //Максимальное количество комментариев на странице
define( "VK_WIDTH", 665 ); //Ширина блока комментариев

//Имя сайта
define( "SITE_NAME", "'.$_GET['sitename'].'");

//Настройка админ аккаунта
define( "ADMIN_USERNAME", "'.$_GET['login'].'" ); //Логин админа
define( "ADMIN_PASSWORD", "'.$_GET['pass'].'" ); //Пароль админа
############################################

// Если вы криворукий - это не трогать!
require( CLASS_PATH . "/Article.php" ); // Подключаем класс для работы с записями
require( CLASS_PATH . "/Category.php" ); // Подключаем класс для работы с категориями 

// И это тоже!
function handleException( $exception ) { // Хандлер ошибок
  include TEMPLATE_PATH . "/include/header.php";
  echo "<div class=\'alert alert-danger\'> <strong>Error!</strong> When load page error detected: " . $exception->getMessage() . "</div>";
  error_log( $exception->getMessage() );
  include TEMPLATE_PATH . "/include/footer.php";
}

// И это!!
set_exception_handler( "handleException" );
?>';
	file_put_contents("config.php",$cfg);
}
?>

<h2>Set-up config.php file</h2>
<form method=GET action=install.php>
<input type='text' name=sitename placeholder='Site name'><br>
<br><br>
<input type='text' name=dbhost placeholder='DB host'><br>
<input type='text' name=dbname placeholder='DB name'><br>
<input type='text' name=dblog placeholder='DB login'><br>
<input type='text' name=dbpass placeholder='DB password'><br>
<br><br>
<input type='text' name=vkapi placeholder='VK API ID for comments'><br>
<br><br>
<input type='text' name=login placeholder='Admin login'><br>
<input type='text' name=pass placeholder='Admin password'><br>
<input type='submit' name=submit value='INSTALL'>
<form>