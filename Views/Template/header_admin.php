<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Tienda Virtual Abel OSH">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Abel OSH">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/favicon.ico">
    <title><?= $data['page_tag'] ?></title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/bootstrap-select.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?= media();?>/js/datepicker/jquery-ui.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
  </head>
  <style>
    .app-header {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    background-color: black;
    z-index: 1030;
    padding-right: 15px;
}
    .app-header__logo {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 auto;
    flex: 1 0 auto;
    color: black;
    text-align: center;
    font-family:Arial, Helvetica, sans-serif;
    padding: 0 15px;
    font-size: 25px;
    font-weight: 400;
    line-height: 50px;
}
.app-header__logo:focus, .app-header__logo:hover {
  text-decoration: none;
  color: #b9bbbe;
}
.app-sidebar {
    position: fixed;
    top: 0px;
    bottom: 0px;
    left: 0;
    padding-top: 70px;
    width: 230px;
    overflow: auto;
    z-index: 10;
    background-color: black;
    -webkit-box-shadow: 0px 8px 17px rgb(0 0 0 / 20%);
    box-shadow: 0px 8px 17px rgb(0 0 0 / 20%);
    -webkit-transition: left 0.3s ease, width 0.3s ease;
    -o-transition: left 0.3s ease, width 0.3s ease;
    transition: left 0.3s ease, width 0.3s ease;
}
    @media (min-width: 768px){
      .app-header__logo {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    display: block;
    width: 230px;
    background-color: white;
      }
      
}
  </style>
  <body class="app sidebar-mini">
    <div id="divLoading" >
      <div>
        <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
      </div>
    </div>
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/dashboard">LABEL APPAREL</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class="fas fa-bars"></i></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?= base_url(); ?>/opciones"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/usuarios/perfil"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>

    <?php require_once("nav_admin.php"); ?> 