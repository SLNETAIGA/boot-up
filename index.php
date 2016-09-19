<?php
/* 
* Boot-Up CMS (c) SLNETAI.ga
* Index file
*/

/* 
$results['pageTitle'] - титл страницы
*/
require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

// Проверяем запрос
switch ( $action ) {
  case 'archive':
    archive();
    break;
  case 'viewArticle':
    viewArticle();
    break;
  case 'aboutus':
    $results['pageTitle'] = "About us | ".SITE_NAME;
    require( TEMPLATE_PATH . "/about.php" ); // Можно и так
    break;
  default:
    homepage();
}

function archive() {
  $results = array();
  $categoryId = ( isset( $_GET['categoryId'] ) && $_GET['categoryId'] ) ? (int)$_GET['categoryId'] : null;
  $results['category'] = Category::getById( $categoryId );
  $data = Article::getList( 100000, $results['category'] ? $results['category']->id : null );
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $data = Category::getList();
  $results['categories'] = array();
  foreach ( $data['results'] as $category ) $results['categories'][$category->id] = $category;
  $results['pageHeading'] = $results['category'] ?  $results['category']->name : "News arhive";
  $results['pageTitle'] = $results['pageHeading'] . " | " . SITE_NAME;
  require( TEMPLATE_PATH . "/archive.php" );
}

function viewArticle() {
  if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
    homepage();
    return;
  }

  $results = array();
  $results['article'] = Article::getById( (int)$_GET["articleId"] );
  $results['category'] = Category::getById( $results['article']->categoryId );
  $results['pageTitle'] = $results['article']->title . " | " . SITE_NAME;
  require( TEMPLATE_PATH . "/viewArticle.php" );
}

function homepage() {
  $results = array();
  $data = Article::getList( HOMEPAGE_NUM_ARTICLES );
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $data = Category::getList();
  $results['categories'] = array();
  foreach ( $data['results'] as $category ) $results['categories'][$category->id] = $category; 
  $results['pageTitle'] = SITE_NAME;
  require( TEMPLATE_PATH . "/homepage.php" );
}

?>

