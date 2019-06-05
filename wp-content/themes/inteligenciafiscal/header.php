<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>InnovaCity - Inteligência Fiscal</title>

  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header>
    <nav
      class="d-flex flex-md-row align-items-center fixed-top navbar navbar-expand-lg navbar-light p-3 px-md-4 pb-3 bg-white border-bottom shadow-sm">
      <a class="navbar-brand mr-md-auto" href="#">Company name</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?>
        </div>
      </div>
    </nav>
  </header>