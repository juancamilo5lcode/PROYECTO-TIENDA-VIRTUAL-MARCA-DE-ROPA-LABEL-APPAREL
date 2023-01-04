<?php 
	headerTienda($data);
	$arrSlider = $data['slider'];
	$arrBanner = $data['banner'];
	$arrProductos = $data['productos'];

	$contentPage = "";
	if(!empty($data['page'])){
		$contentPage = $data['page']['contenido'];
	}

 ?>
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
			<?php 
			for ($i=0; $i < count($arrSlider) ; $i++) { 
				$ruta = $arrSlider[$i]['ruta'];
			 ?>
				<div class="item-slick1" style="background-image: url(<?= $arrSlider[$i]['portada'] ?>);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									<?= $arrSlider[$i]['descripcion'] ?>
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201-cambio cl2 p-t-19 p-b-43 respon1" >
									<?= $arrSlider[$i]['nombre'] ?>
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="<?= base_url().'/tienda/categoria/'.$arrSlider[$i]['idcategoria'].'/'.$ruta; ?>" class="flex-c-m stext-101 cl0 
								size-101 bg1-cambio  hov-btn1 p-lr-15 trans-04">
									Ver productos
								</a>
							</div>
						</div>
					</div>
				</div>
				
			<?php 
			}
			?>
			</div>
			<div class="conter">
		<div class="content">
		  <a href="#collections"><span class="material-symbols-outlined">
			expand_circle_down
			</span></a>
		</div>
		</div>
	</section>
	<style>
		.content {
		position: absolute;
		left: 50%;
		top: 95%;
		transform: translate(-50%, -50%);
		color: #000;
		z-index: 1;

		
		
		
		}
		.material-symbols-outlined{
		font-size: 80px;
		
		border-radius: 50%;
		color: #939393;
		
		}

		.material-symbols-outlined:hover{
		
		
		color: #939393;
		background: white;
		
		}
					.ltext-201-cambio{
					font-family: "Poppins-Regular";
					font-size: 60px;
					line-height: 1.1;
					text-transform: uppercase; 

				}
				.bg1-cambio {
					background-color: #b9bbbe;
				}
				.hov-btn1:hover {
					background-color: black;
				}
				.btn-back-to-top {
				display: none;
				position: fixed;
				width: 40px;
				height: 38px;
				bottom: 0px;
				right: 40px;
				background-color:black;
				opacity: 0.5;
				justify-content: center;
				align-items: center;
				z-index: 1000;
				cursor: pointer;
				transition: all 0.4s;
				-webkit-transition: all 0.4s;
				-o-transition: all 0.4s;
				-moz-transition: all 0.4s;
				}

				.symbol-btn-back-to-top {
				font-size: 25px;
				color: white;
				line-height: 1em;
				}

				.btn-back-to-top:hover {
				opacity: 1;
				background-color: black;
				}

					</style>

					<br>
					<br>
					<br>
					<br>
	<!-- Banner -->
	<!-- <div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<?php 
				for ($j=0; $j < count($arrBanner); $j++) {
					$ruta = $arrBanner[$j]['ruta']; 
				 ?>
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto"> -->
					<!-- Block1 -->
					<!-- <div class="block1 wrap-pic-w">
						<img src="<?= $arrBanner[$j]['portada'] ?>" alt="<?= $arrBanner[$j]['nombre'] ?>">

						<a href="<?= base_url().'/tienda/categoria/'.$arrBanner[$j]['idcategoria'].'/'.$ruta; ?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									<?= $arrBanner[$j]['nombre'] ?>
								</span> -->
								<!-- <span class="block1-info stext-102 trans-04">
									Spring 2018
								</span> 
							</div>
							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver productos
								</div>
							</div>
						</a>
					</div>
				</div>
				<?php 
				}
				 ?>
			</div>
		</div>
	</div>

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140" id="collections">
		<div class="container">
			<div class="p-b-10">
				<h6 class="ltext-103-volumen">Volumen 1</h6>
				<h3 class="ltext-103 cl5">
					Energies
				</h3>
			</div>
			<style>
				.ltext-103-volumen{

					line-height: 1.1;
					margin-left: 42rem;
					margin-bottom: 1rem;
					margin-top: 3rem;
				}
				.ltext-103{
					font-family: Poppins-Bold;
					font-size: 30px;
					line-height: 1.1;
					text-transform: uppercase;
					margin-left: 40rem;
					margin-bottom: 3rem;
				}
				@media (max-width: 767px) {
					.ltext-103{
					font-family: Poppins-Bold;
					font-size: 30px;
					line-height: 1.1;
					text-transform: uppercase;
					margin-left: 10.5rem;
							}
					.ltext-103-volumen{
			
					line-height: 1.1;
					margin-left: 10.5rem;
				}
						}
			</style>
	
			<div class="row isotope-grid">
			<?php 
				for ($p=0; $p < count($arrProductos) ; $p++) {
					$rutaProducto = $arrProductos[$p]['ruta']; 
					if(count($arrProductos[$p]['images']) > 0 ){
						$portada = $arrProductos[$p]['images'][0]['url_image'];
					}else{
						$portada = media().'/images/uploads/product.png';
					}
			 ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
						<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>" ><img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>"></a>
							<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>" 
							class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver producto
							</a>
							<a href="#"
								 id="<?= openssl_encrypt($arrProductos[$p]['idproducto'],METHODENCRIPT,KEY); ?>"
								 class="block2-btn-cambio block2-btn flex-c-m js-addwish-b2 js-addcart-detail
								 icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11
								 ">
									<i class="zmdi zmdi-shopping-cart"></i>
								</a>
						</div>
						<style>
							.bor2{
								border-radius: 0px;
							}
							.block2-btn-cambio{
								position: absolute;
								bottom: -50px;
								left: 88%;
								transform: translateX(-50%);
								margin-bottom: 9px;
								font-size: 2.2rem;
							
							}

							.stext-104{
								font-family: "Poppins-Regular";
								font-size: 15px;
								line-height: 1.466667;
								margin-left: 5rem;

							}
							.stext-105{
								font-family: "Poppins-Regular";
								font-size: 15px;
								line-height: 1.466667;
								margin-left: 7rem;

							}

							.block2-pic:hover .block2-btn-cambio{
								bottom: 22rem;
							}

							@media (max-width: 767px) {
								.block2-pic:hover .block2-btn-cambio{
								bottom: 33rem;
								font-size: 2.2rem;
							}
							.block2-btn-cambio{
								position: absolute;
								bottom: -50px;
								left: 90%;
								transform: translateX(-50%);
								margin-bottom: 9px;
							
							}

							.stext-104{
								font-family: "Poppins-Regular";
								font-size: 15px;
								line-height: 1.466667;
								margin-left: 10rem;

							}
							.stext-105{
								font-family: "Poppins-Regular";
								font-size: 15px;
								line-height: 1.466667;
								margin-left: 12rem;

							}


							}
						</style>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $arrProductos[$p]['nombre'] ?>
								</a>

								<span class="stext-105 cl3">
									<?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?>
								COP</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="<?= base_url() ?>/tienda" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Ver más
				</a>
			</div>
		</div>

		<style>
			.bor1{
				border-radius: 0px;
			}
		
		.bg2{
			background-color: #b9bbbe;
			color: white;
		}

		.bg1:hover{
			color: white;
			background-color: black;
		}

		
		</style>
<!-- 
		<div class="container text-center p-t-80">
			<hr>
		 $contentPage ?> 
		</div> -->
	</section>
<?php 
	footerTienda($data);
 ?>

