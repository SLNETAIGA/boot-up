<!DOCTYPE html>
<html lang="ru">
  <head>
    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>
<!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css" />
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <style>
	  li {
      list-style-type: none; 
      }
	  </style>
  </head>
  <body>
<!-- Навбар -->
  <div class="container">
          <div class="row show-grid">
              <div class="col-sm-12 col-md-12 col-lg-12">
                  
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><?php echo SITE_NAME; ?> <span class='glyphicon glyphicon-cloud'></span></a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="index.php?action=aboutus">About us</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    
                </nav>
                  
              </div>
          </div>