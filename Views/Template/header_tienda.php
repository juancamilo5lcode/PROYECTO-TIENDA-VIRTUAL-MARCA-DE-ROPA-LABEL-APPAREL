<?php 
	$cantCarrito = 0;
	if(isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0){ 
		foreach($_SESSION['arrCarrito'] as $product) {
			$cantCarrito += $product['cantidad'];
		}
	}
	$tituloPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['titulo'] : "";
	$infoPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['contenido'] : "";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $data['page_tag']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?php 
		$nombreSitio = NOMBRE_EMPESA;
		$descripcion = DESCRIPCION;
		$nombreProducto = NOMBRE_EMPESA;
		$urlWeb = base_url();
		$urlImg = media()."/images/portada.jpg";
		if(!empty($data['producto'])){
			//$descripcion = $data['producto']['descripcion'];
			$descripcion = DESCRIPCION;
			$nombreProducto = $data['producto']['nombre'];
			$urlWeb = base_url()."/tienda/producto/".$data['producto']['idproducto']."/".$data['producto']['ruta'];
			$urlImg = $data['producto']['images'][0]['url_image'];
		}
	?>
	<meta property="og:locale" 		content='es_ES'/>
	<meta property="og:type"        content="website" />
	<meta property="og:site_name"	content="<?= $nombreSitio; ?>"/>
	<meta property="og:description" content="<?= $descripcion; ?>" />
	<meta property="og:title"       content="<?= $nombreProducto; ?>" />
	<meta property="og:url"         content="<?= $urlWeb; ?>" />
	<meta property="og:image"       content="<?= $urlImg; ?>" />

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= media() ?>/tienda/images/favicon.ico"/>
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo media() ?>/tienda/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo media() ?>/tienda/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/css/style.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	<!-- Modal -->
	<div class="modal fade" id="modalAyuda" tabindex="-1" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title"><?= $tituloPreguntas ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      		<div class="page-content">
	        		<?= $infoPreguntas; ?>
	      		</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<div id="divLoading" >
      <div>
        <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
      </div>
    </div>
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						<?php if(isset($_SESSION['login'])){ ?>
						Bienvenido: <?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos'] ?>
						<?php } ?>
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25" data-toggle="modal" data-target="#modalAyuda" >
							Help & FAQs
						</a>
						<?php 
							if(isset($_SESSION['login'])){
						?>
						<a href="<?= base_url() ?>/dashboard" class="flex-c-m trans-04 p-lr-25">
							Mi cuenta
						</a>
						<?php } 
							if(isset($_SESSION['login'])){
						?>
						<a href="<?= base_url() ?>/logout" class="flex-c-m trans-04 p-lr-25">
							Salir
						</a>
						<?php }else{ ?>
						<a href="<?= base_url() ?>/login" class="flex-c-m trans-04 p-lr-25">
							Iniciar Sesión
						</a>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop" style="top: 40px; height: 10rem;">
			<a href="<?= base_url(); ?>" class="logo">
						<img src="<?= media() ?>/tienda/images/LABEL.png" alt="Tienda Virtual">
					</a>
							<hr>
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					
					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="">
								<a href="<?= base_url(); ?>">Inicio</a>
							</li>

							<li>
								<a href="<?= base_url(); ?>/tienda">Collection</a>
							</li>

							<li>
								<a href="<?= base_url(); ?>/carrito">Carrito</a>
							</li>
							
							<li>
								<a href="<?= base_url(); ?>/nosotros">Nosotros</a>
							</li>

							<!-- <li>
								<a href="<?= base_url(); ?>/sucursales">Sucursales</a>
							</li> -->

							<li>
								<a href="<?= base_url(); ?>/contacto">Contacto</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m" style="margin-bottom:20rem; margin-left:13.5rem;">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
						<?php if($data['page_name'] != "carrito" and $data['page_name'] != "procesarpago"){ ?>
						<div class="cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?= $cantCarrito; ?> ">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
						<?php } ?>
					</div>
				</nav>
			</div>	
		</div>
		<style>
			.main-menu-m {
			padding-top: 10px;
			padding-bottom: 10px;
			background-color: #b9bbbe;
			}
		

			hr{
			height: 1px;
			width: 50%;
			margin:35px 0px 0px 0px;
			margin-left: 25%;
			color: #000;
			}

.wrap-menu-desktop {
  position: fixed;
  z-index: 1100;
  background-color: transparent;
  width: 100%;
  height: 84px;
  top: 40px;
  left: 0px; 

  -webkit-transition: height 0.3s, background-color 0.3s;
  -o-transition: height 0.3s, background-color 0.3s;
  -moz-transition: height 0.3s, background-color 0.3s;
  transition: height 0.3s, background-color 0.3s;
}

.header-v2 .wrap-menu-desktop {
  background-color: #fff;
  top: 0;
}

.header-v3 .wrap-menu-desktop {
  background-color: transparent;
  top: 0;
  border-bottom: 1px solid rgba(255,255,255,0.1);
}

.header-v4 .wrap-menu-desktop {
  background-color: #fff;
}


/*---------------------------------------------*/
.limiter-menu-desktop {
  height: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  background-color: transparent;
}



/*------------------------------------------------------------------
[ Logo ]*/
.logo {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  height: 40%;
  margin-right: 55px;
}

.logo img {
  max-width: 100%;
  max-height: 100%;
  margin-left: 53rem;
    margin-top: 2rem;
}



/*------------------------------------------------------------------
[ Menu ]*/
.container ul, .container ol{
	margin-left: 90px;
	margin-bottom: 20px;
}

.menu-desktop {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  height: 100%;
  margin-left: 18rem;
  margin-bottom: 5rem;
}

.main-menu {
  list-style-type: none;
  margin: 0;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  margin-bottom: auto;
  margin-left: 15rem;
}

.main-menu > li {
  display: block;
  position: relative;
  padding: 20px 10px 20px 0px;
  margin: 0px 4px 0px 14px;
}

.main-menu > li > a {
  font-family: "Robotp-Regular";
  font-size: 14px;
  color: #333;
  padding: 5px 0px;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  margin: 0px 20px 0px 20px;
}

.header-v3 .main-menu > li > a {
  color: #fff;
}

.sub-menu {
  list-style-type: none;
  position: absolute;
  top:0;
  left:100%;
  min-width: 178px;
  max-width: 225px;
  background-color: #fff;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  padding: 5px 0;

  box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);
  -moz-box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);
  -webkit-box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);
  -o-box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);
  -ms-box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);

  visibility: hidden;
  opacity: 0; 
}

.sub-menu li {
  position: relative;
  background-color: transparent;

  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

.main-menu > li > .sub-menu {
  top:100%;
  left: 0;
}

.sub-menu a {
  font-family: Poppins-Regular;
  font-size: 14px;
  line-height: 1.5;
  color: #555;

  display: block;
  padding: 8px 20px; 
  width: 100%;

  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

/*---------------------------------------------*/
.main-menu > li:hover > a {
  text-decoration: none;
  color: #6c7ae0;
}

.main-menu > li:hover > .sub-menu {
  visibility: visible;
  opacity: 1;
}

.sub-menu li:hover > .sub-menu {
  visibility: visible;
  opacity: 1;
} 

.sub-menu li:hover {
  background-color: transparent;
}

.sub-menu > li:hover > a {
  color: #6c7ae0;
  text-decoration: none;
}

.wrap-icon-header {
  flex-grow: 1;
}

.icon-header-item {
  position: relative;
  font-size: 20px;
  line-height: 1;
  cursor: pointer;
}

.wrap-menu-desktop:hover{
  background-color: white;
}

		</style>
		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="<?= base_url(); ?>"><img src="<?= media() ?>/tienda/images/LABEL.png" alt="Tienda Virtual"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
				<?php if($data['page_name'] != "carrito" and $data['page_name'] != "procesarpago"){ ?>
				<div class="cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?= $cantCarrito; ?>">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>
				<?php } ?>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						<?php if(isset($_SESSION['login'])){ ?>
						Bienvenido: <?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos'] ?>
						<?php } ?>
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04" data-toggle="modal" data-target="#modalAyuda">
							Help & FAQs
						</a>
						<?php 
							if(isset($_SESSION['login'])){
						?>
						<a href="<?= base_url() ?>/dashboard" class="flex-c-m trans-04 p-lr-25">
							Mi cuenta
						</a>
						<?php } 
							if(isset($_SESSION['login'])){
						?>
						<a href="<?= base_url() ?>/logout" class="flex-c-m trans-04 p-lr-25">
							Salir
						</a>
						<?php }else{ ?>
						<a href="<?= base_url() ?>/login" class="flex-c-m trans-04 p-lr-25">
							Iniciar Sesión
						</a>
						<?php } ?>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="<?= base_url(); ?>">Inicio</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/tienda">Colección</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/carrito">Carrito</a>
				</li>

				<li>
					<a href="<?= base_url(); ?>/nosotros">Nosotros</a>
				</li>
<!-- 
				<li>
					<a href="<?= base_url(); ?>/sucursales">Sucursales</a>
				</li> -->

				<li>
					<a href="<?= base_url(); ?>/contacto">Contacto</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="<?= media() ?>/tienda/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15" method="get" action="<?= base_url() ?>/tienda/search" >
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input type="hidden" name="p" value="1">
					<input class="plh3" type="text" name="s" placeholder="Buscar...">
				</form>
			</div>
		</div>
	</header>
	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>
		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Tu carrito
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			<div id="productosCarrito" class="header-cart-content flex-w js-pscroll">
				<?php getModal('modalCarrito',$data); ?>
			</div>
		</div>
	</div>
