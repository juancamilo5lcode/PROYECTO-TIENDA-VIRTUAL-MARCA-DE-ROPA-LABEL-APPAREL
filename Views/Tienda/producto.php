<?php 
headerTienda($data);
$arrProducto = $data['producto'];
$arrProductos = $data['productos'];
$arrImages = $arrProducto['images']; 
$rutacategoria = $arrProducto['categoriaid'].'/'.$arrProducto['ruta_categoria'];
$urlShared = base_url()."/tienda/producto/".$arrProducto['idproducto']."/".$arrProducto['ruta'];
 ?>
<br><br><br>

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?= base_url(); ?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<a href="<?= base_url().'/tienda/categoria/'.$rutacategoria; ?>" class="stext-109 cl8 hov-cl1 trans-04">
				<?= $arrProducto['categoria'] ?>
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<span class="stext-109 cl4">
				<?= $arrProducto['nombre'] ?>
			</span>
		</div>   
	</div>
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
							<?php 
								if(!empty($arrImages)){
									for ($img=0; $img < count($arrImages) ; $img++) { 
										
							 ?>
								<div class="item-slick3" data-thumb="<?= $arrImages[$img]['url_image']; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="<?= $arrImages[$img]['url_image']; ?>" alt="<?= $arrProducto['nombre']; ?>">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?= $arrImages[$img]['url_image']; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							<?php 
									}
								} 
							?>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
					<img src="<?= media() ?>/tienda/images/label.png" alt="Tienda Virtual" style="margin-top: 0.1rem;width: 25%;margin-bottom: 1rem;">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?= $arrProducto['nombre']; ?>
						</h4>
						<span class="mtext-106 cl2">
							<?= SMONEY.formatMoney($arrProducto['precio']); ?>
						COP</span>
						
						<!--  -->
						<div class="ProductForm__Variants">
               <div class="ProductForm__Option ProductForm__Option--labelled ">
                  <span class="ProductForm__Label">
                  
                     Size:
                     <!-- <span class="info-size-guide">
                     Guia de tallas
                     <div id="open" class="circle-info">i</div>
                     <div id="modal_container" class="modal-container">
  <div class="modal">
    <h1>- GUIA GRAFICA DE MEDICION -</h1>
    <img src="<?= media() ?>/tienda/images/guia.png" alt="Tienda Virtual" style="
    width: 104%;
    height: 63rem;
    
"> 
     <button id="close">Cerrar</button>
  </div>
</div> 
<script>
const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
  modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
  modal_container.classList.remove('show');
});
</script> -->
                     </span>
                  </span>
				  <!-- <input  id="med-product" type="radio" name="let-product" value="S">S
				  <input id="med-product" type="radio" name="let-product" value="M">M
				  <input id="med-product" type="radio" name="let-product" value="L">L
				  <input id="med-product" type="radio" name="let-product" value="XL">XL -->
                  <ul class="SizeSwatchList HorizontalList HorizontalList--spacingTight">

                     <li class="HorizontalList__Item">
                     <input id="med-product" class="SizeSwatch__Radio" type="radio" name="option-0" value="S" checked="checked" data-option-position="1">
                     <label for="med-product" class="SizeSwatch">S</label>
                  </li>

                     <li class="HorizontalList__Item">   
                     <input id="med-product" class="SizeSwatch__Radio" type="radio" name="option-0" value="M" data-option-position="1">
                     <label for="med-product" class="SizeSwatch">M</label>
                  </li>
                     <li class="HorizontalList__Item">   
                     <input id="med-product" class="SizeSwatch__Radio" type="radio" name="option-0" value="L" data-option-position="1">
                     <label for="med-product" class="SizeSwatch">L</label>
                   </li>
                   <li class="HorizontalList__Item">   
                   <input id="med-product" class="SizeSwatch__Radio" type="radio" name="option-0" value="XL" data-option-position="1">
                   <label for="med-product" class="SizeSwatch">XL</label>
                   </li>
                  </ul>
               </div>
						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input id="cant-product" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" min="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

									<button id="<?= openssl_encrypt($arrProducto['idproducto'],METHODENCRIPT,KEY); ?>" class="flex-c-m stext-101 cl0 size-101 bg1-cambio bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Agregar al carrito
									</button>
								</div>
							</div>	
						</div>
						<!-- <p class="stext-102 cl3 p-t-23"></p> -->
						

						<div class="ProductMeta__Description">
              <div class="Rte"><meta charset="utf-8"><meta charset="utf-8">
<p style="font-size: 1rem; color: #5c5c5c;"><?= $arrProducto['descripcion']; ?></p>
<br>
<p style="font-size: 1rem; color: #5c5c5c;"><strong>100% Algodón</strong></p>
<br>
<p style="font-size: 1rem; color: #5c5c5c;"><strong>210 gr</strong></p>
<br>
<p style="font-size: 1rem; color: #5c5c5c;"><strong>***Te recomendamos comprar una talla mayor a la que normalmente utilizas o revisar el cuadro de medidas para verificar tu talla correcta ***</strong></p>

<br>
<div class="TableWrapper"><table width="100%">
<tbody>
<tr>
<td style="width: 19%;">&nbsp;Tallas</td>
<td style="width: 30%;">Pecho<br>
</td>
<td style="width: 26.9438%;">Manga</td>
<td style="width: 35.0562%;">Largo</td>
</tr>
<tr>
<td style="width: 19%;">S</td>
<td style="width: 30%;">53</td>
<td style="width: 26.9438%;">23</td>
<td style="width: 35.0562%;">70</td>
</tr>
<tr>
<td style="width: 19%;">M</td>
<td style="width: 30%;">54</td>
<td style="width: 26.9438%;">24</td>
<td style="width: 35.0562%;">71</td>
</tr>
<tr>
<td style="width: 19%;">L</td>
<td style="width: 30%;">57</td>
<td style="width: 26.9438%;">25</td>
<td style="width: 35.0562%;">72</td>
</tr>
<tr>
<td style="width: 19%;">XL</td>
<td style="width: 30%;">59</td>
<td style="width: 26.9438%;">27</td>
<td style="width: 35.0562%;">74</td>
</tr>
</tbody>
</table></div>
                <div class="accordion" style="
    font-size: 1rem;
">
	<div class="tabs">
		
<div class="tab">
					<input type="checkbox" id="qtn1" name="qtn">
					<label class="txt-title" for="qtn1">ENVIOS</label>
					<div class="txt-description"><p>El envío es gratis por compras 
						superiores a $250.000, si es menor a este valor, pagarías $10.000 por el valor del flete. Para conocer los tiempos de entrega.</p></div>
						<!-- <a href="https://undergold.myshopify.com/pages/r-e-g-u-l-a-c-i-o-n" title="https://undergold.myshopify.com/pages/r-e-g-u-l-a-c-i-o-n">Ver aquí</a> -->
				</div>
<!-- <div class="tab">
					<input type="checkbox" id="qtn2" name="qtn">
					<label class="txt-title" for="qtn2">CAMBIOS Y DEVOLUCIONES</label>
					<div class="txt-description"><p>Tienes un máximo de 30 días para ejercer tu derecho a retracto y un máximo de 30 días para cambios y garantías. 
						Si estás en Medellín o Bogotá, te recomendamos realizar el cambio directamente en la tienda física. Para ver las politicas de cambios. 
						<a href="https://undergold.myshopify.com/pages/r-e-g-u-l-a-c-i-o-n" target="_blank" title="https://undergold.myshopify.com/pages/r-e-g-u-l-a-c-i-o-n">Ver aqui</a></p></div>
				</div> -->
            <div class="tab">
							<input type="checkbox" id="qtn3" name="qtn">
							<label class="txt-title" for="qtn3">Cuidados</label>
							<div class="txt-description">
							<img src="<?= media() ?>/tienda/images/cuidados.webp" alt="Tienda Virtual" style="width: 100%;">
							</div>  
                     </div>  
	</div>
</div>
						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								Compartir en:
							</div>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook"
								onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?= $urlShared; ?> &t=<?= $arrProducto['nombre'] ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"
								>
								<i class="fa fa-facebook"></i>
							</a>

							<a href="https://twitter.com/intent/tweet?text=<?= $arrProducto['nombre'] ?>&url=<?= $urlShared; ?>&hashtags=<?= SHAREDHASH; ?>" target="_blank" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="https://api.whatsapp.com/send?text=<?= $arrProducto['nombre'].' '.$urlShared ?>" target="_blank" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="WhatsApp">
								<i class="fab fa-whatsapp" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<style>
			.menu-desktop {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    height: 100%;
    margin-left: 20rem;
    margin-bottom: 5rem;
}
 .modal-container {
   display: flex;
   background-color: rgba(0, 0, 0, 0.3);
   align-items: center;
   justify-content: center;
   position: fixed;
   pointer-events: none;
   opacity: 0;  
   top: 0;
   left: 0;
   height: 100vh;
   width: 100vw;
   transition: opacity 0.3s ease;
 }
 
 .show {
   pointer-events: auto;
   opacity: 1;
 }
 
 .modal {
   background-color: #fff;
   width: 600px;
   max-width: 100%;
   padding: 30px 50px;
   border-radius: 5px;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
   text-align: center;
 }
 
 .modal h1 {
   margin: 0;
 }
 
 .modal p {
   opacity: 0.7;
   font-size: 14px;
 }
.ProductForm__Variants {
   margin-bottom: 25px;
}

.ProductForm__Option--labelled {
   margin-bottom: 20px;
}

.ProductForm__Option {
   position: relative;
   margin-top: 1.5rem;
   margin-bottom: -2rem;
}

.ProductForm__Label {
   display: flex;
   justify-content: space-between;
   margin-bottom: 8px;
}


.ProductForm__Label .info-size-guide {
   cursor: pointer;
   display: flex;
   align-items: center;
}

.ProductForm__Label .info-size-guide .circle-info {
   text-transform: none;
   width: 16px;
   height: 16px;
   display: flex;
   justify-content: center;
   align-items: center;
   border: solid 1px black;
   border-radius: 100%;
   margin-left: 4px;
}

.HorizontalList--spacingTight {
   margin-left: -8px;
   margin-right: -8px;
}

.HorizontalList {
   list-style: none;
   margin: -6px -8px;
}

.HorizontalList--spacingTight .HorizontalList__Item {
   margin-right: 8px;
   margin-left: 8px;
}

.HorizontalList__Item {
   display: inline-block;
   margin: 6px 8px;
}

.SizeSwatch__Radio {
   display: none;
}

/* input[type=checkbox], input[type=radio] {
   box-sizing: border-box;
   padding: 0;
} */

/* input {
   line-height: normal;
   border-radius: 0;
} */

.SizeSwatch.is-active:after, .SizeSwatch__Radio:checked+.SizeSwatch {
   border-color: #5c5c5c;
   color: #5c5c5c;
}

.SizeSwatch, .option-size {
   display: inline-block;
   text-align: center;
   min-width: 36px;
   padding: 10px 15px;
   border: 1px solid #e7e7e7;
   color: #939393;
   cursor: pointer;
}


.ProductForm__Label {
   display: flex;
   justify-content: space-between;
   margin-bottom: 8px;
}


.flex-r-m {
    justify-content: flex-start;
 
    align-items: center;
}
			.TableWrapper {
   overflow: auto;
   -webkit-overflow-scrolling: touch;
}


.Table, .Rte table {
   width: 100%;
   font-size: 13px;
   border-collapse: separate;
    white-space: nowrap; 
}

.ProductForm~.ProductMeta__Description {
   border-top: none;
   padding-top: 0;
}

/* @media screen and (min-width: 1140px)
.Table, .Rte table {
    white-space: normal;
} */

table {
   /* border-collapse: collapse; */
   border-spacing: 0;
}

tbody {
   display: table-row-group;
   vertical-align: middle;
   border-color: inherit;
}

tr {
   display: table-row;
   vertical-align: inherit;
   border-color: inherit;
}

td, th {
   padding: 0;
}

.ProductMeta__Description {
    margin: 24px 0; 
    padding-top: 24px; 
    border-top: 1px solid #e7e7e7; 
   text-align: left;
}
.Table th, .Rte table th, .Table td, .Rte table td {
   padding: 18px 10px;
   border-bottom: 1px solid #e7e7e7;
   text-align: left;
}



.Table th:first-child, .Rte table th:first-child, .Table td:first-child, .Rte table td:first-child, .Table tfoot td:empty+td, .Rte table tfoot td:empty+td {
   padding-left: 0;
}

.Table th:last-child, .Rte table th:last-child, .Table td:last-child, .Rte table td:last-child {
   padding-right: 0;
}

			.accordion {
	display: flex;
	width: 100%;
	margin: 30px 0;
}
.accordion input 
{
	position: absolute;
	opacity: 0;
	z-index: -1;
}
.accordion .tabs 
{
	width: 100%;
	overflow: hidden;
}
.accordion .tab 
{
	width: 100%;
	overflow: hidden;
    border: 1px solid var(--colorBorder);
	border-bottom: none;
}
.accordion .tab:last-child
{
	border-bottom: 1px solid var(--colorBorder);
}
.accordion .txt-title {
	display: flex;
	justify-content: space-between;
	padding: 1em;
	color: #000000;
	background: #ffffff;
	cursor: pointer;
	text-transform: none !important;
	margin-bottom: 0;
	font-weight: 700;
    text-transform: uppercase !important;
    letter-spacing: .3em !important;
    font-size: .8em !important;	
	text-align: left;
}
.accordion .txt-title:hover {
	color: #5c5c5c;
}
.accordion .txt-title::after 
{
	content: "❯";
	width: 1em;
	height: 1em;
	text-align: center;
	transition: all 0.35s;
}
.accordion .txt-description 
{
	display: flex;
	flex-direction: column;
	max-height: 0;
	padding: 0 1em; 
	background: white;
	transition: all 0.35s;
}
.accordion .txt-description .img-accordion
{
	margin-top: 0;
}
.txt-description > br:first-child,
.txt-description > br:first-child + br
{
    display: none;
}
.accordion .txt-description
{
	text-align: justify;	
}
.accordion .txt-description,
.accordion .txt-description p,
.accordion .txt-description b,
.accordion .txt-description li,
.accordion .txt-description span,
.accordion .txt-description strong
{
	color: #000000;
	font-size: 14px;	
}
.accordion input:checked + .txt-title {
	color: #5c5c5c;
}
.accordion input:checked + .txt-title::after {
transform: rotate(90deg);
}
.accordion input:checked ~ .txt-description {
	max-height: 100vh;
	padding: 1em;
}
@media only screen and (max-width:768px)
{

	.accordion .txt-title 
	{
    	letter-spacing: .1em !important;
	}	
	.accordion .txt-description,
	.accordion .txt-description p,
	.accordion .txt-description b,
	.accordion .txt-description li,
	.accordion .txt-description span,
	.accordion .txt-description strong
	{
		font-size: 13px;	
	}	
}
		.wrap-slick3-dots {
		width: 11.111111%;
		}

		.container ul, .container ol{
		margin-left: 15px;
		margin-bottom: 20px;
		}
		.stext-109 {
		font-family: Poppins-Regular;
		font-size: 12px;
		line-height: 1.833333;
		margin-top: 5rem;
}
		.bg1-cambio {
			background-color: #b9bbbe;
			border-radius: 0px;
		}
		

@media (max-width: 767px) {
	.stext-109 {
		font-family: Poppins-Regular;
		font-size: 12px;
		line-height: 1.833333;
		margin-top: 0rem;
}


}

		</style>





		
	</section>
	<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<h3>Productos Relacionados</h3>
		</div>
	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

				<?php 
					if(!empty($arrProductos)){
						for ($p=0; $p < count($arrProductos); $p++) { 
							$ruta = $arrProductos[$p]['ruta'];
							if(count($arrProductos[$p]['images']) > 0 ){
								$portada = $arrProductos[$p]['images'][0]['url_image'];
							}else{
								$portada = media().'/images/uploads/product.png';
							}
				 ?>
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">

								<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
									Ver producto
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?= $arrProductos[$p]['nombre'] ?>
									</a>
									<span class="stext-105 cl3">
										<?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?>
										COP</span>
								</div>
								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#"
									 id="<?= openssl_encrypt($arrProductos[$p]['idproducto'],METHODENCRIPT,KEY); ?>"
									 pr="1"
									 class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail
									 icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11
									 ">
										<i class="zmdi zmdi-shopping-cart"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php 
						}
					}	
				 ?>

				</div>
			</div>
		</div>
	</section>
<?php 
	footerTienda($data);
?>
