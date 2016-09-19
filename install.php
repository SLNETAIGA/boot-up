<?php
if( isset($_GET['submit']) ){
	$cfg = '<?php
/* 
* Boot-Up CMS (c) SLNETAI.ga
* Config-file
*/

############################################
//�������� ���
ini_set( "display_errors", true );

//���������� ������ �� ����� ������
define( "SHOW_ADMINLINK", true);

//��������� ���� http://www.php.net/manual/en/timezones.php
date_default_timezone_set( "Australia/Sydney" );

//��������� �� 
define( "DB_MS_HOST", "'.$_GET['dbhost'].'" );
define( "DB_MS_NAME", "'.$_GET['dbname'].'" );
define( "DB_DSN", "mysql:host=".DB_MS_HOST.";dbname=".DB_MS_NAME ); //
define( "DB_USERNAME", "'.$_GET['dblog'].'" ); //����� ������������ ��
define( "DB_PASSWORD", "'.$_GET['dbpass'].'" ); //������ ������������ ��

//�������� ������
define( "CLASS_PATH", "classes" ); //����� � ��������
define( "TEMPLATE_PATH", "templates" ); //����� � ��������

//������������ ���������� ������� �� �������
define( "HOMEPAGE_NUM_ARTICLES", 5 );

//��������� ������������ ���������
define( "VK_APIID", '.$_GET['vkapi'].' ); //ApiId ���������� ��������� ��� ������������
define( "VK_MAX", 10 ); //������������ ���������� ������������ �� ��������
define( "VK_WIDTH", 665 ); //������ ����� ������������

//��� �����
define( "SITE_NAME", "'.$_GET['sitename'].'");

//��������� ����� ��������
define( "ADMIN_USERNAME", "'.$_GET['login'].'" ); //����� ������
define( "ADMIN_PASSWORD", "'.$_GET['pass'].'" ); //������ ������
############################################

// ���� �� ���������� - ��� �� �������!
require( CLASS_PATH . "/Article.php" ); // ���������� ����� ��� ������ � ��������
require( CLASS_PATH . "/Category.php" ); // ���������� ����� ��� ������ � ����������� 

// � ��� ����!
function handleException( $exception ) { // ������� ������
  include TEMPLATE_PATH . "/include/header.php";
  echo "<div class=\'alert alert-danger\'> <strong>Error!</strong> When load page error detected: " . $exception->getMessage() . "</div>";
  error_log( $exception->getMessage() );
  include TEMPLATE_PATH . "/include/footer.php";
}

// � ���!!
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