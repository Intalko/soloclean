<div class="tiva-slideshow-wrapper">
	<div id="tiva-slideshow" class="nivoSlider">
		<a href="#" title="Berikan Yang Istimewa"><img class="img-responsive" src="<?=base_url()?>includes/frontend/img/slide/slide1-h1.jpg" alt="Berikan Yang Istimewa"></a>
		<a href="<?=base_url()?>produk/2" title="Wedding Flower"><img class="img-responsive" src="<?=base_url()?>includes/frontend/img/slide/slide1-h2.jpg" alt="Wedding Bouquet"></a>
		<a href="<?=base_url()?>produk/1" title="Bunga Papan"><img class="img-responsive" src="<?=base_url()?>includes/frontend/img/slide/slide1-h3.jpg" alt="Bunga Papan"></a>

	</div>
	
</div><!-- end tiva-slideshow-wrapper -->

<div id="columns" class="columns-container">
	<div class="section section-banner">
		<div class="container">
			<div class="tv-table block">
				<div class="tv-tablecell">
					<div class="block-html block">
						<h4>Berikan Ucapan Anda</h4>
						<h3>BUNGA PAPAN</h3>
						<p class="block-htmldes">Melalui bunga papan, Anda dapat memberikan ucapan kepada orang tertuju, baik dalam ucapan sukacita ataupun ucapan dukacita.</p>
						<a class="button btn btn-primary" href="<?=base_url()?>produk/1" title="cari_bunga_papan">Cari Sekarang</a>
					</div><!--end block-html --> 
				</div>
				<div class="tv-tablecell box-image">
					<div class="banner-item effectbanner">
						<a class="image-wrap" href="#"><img class="img-responsive" src="<?=base_url()?>includes/frontend/img/banner/banner1-h1.jpg" alt=""></a>
					</div><!--end banner-item-->
				</div>
			</div>
			<hr/>
			<div class="tv-table block">
				<div class="tv-tablecell box-image">
					<div class="banner-item effectbanner">
						<a class="image-wrap" href="#"><img class="img-responsive" src="<?=base_url()?>includes/frontend/img/banner/banner2-h1.jpg" alt=""></a>
					</div><!--end banner-item-->
				</div>
				<div class="tv-tablecell">
					<div class="block-html block">
						<h4>Jadikan Harimu Spesial</h4>
						<h3>HAND BOUQUETS</h3>
						<p class="block-htmldes">Lengkapi hari bahagiamu dengan Hand Bouquet cantik.</p>
						<a class="button btn btn-primary" href="<?=base_url()?>produk/2" title="cari_bouquets">Cari Sekarang</a>
					</div><!--end block-html --> 
				</div>
			</div>
		</div><!-- end container -->
	</div><!-- end section-banner -->

	<div class="section section-tabsproduct">
		<div class="container">
			<!-- tabs-top -->
			<div class="tabs-top block">
				<div class="block-title">
					<h4 class="title_block">Koleksi Kami</h4>
					<!-- Nav tabs -->
					<ul id="myTabs" class="nav nav-tabs" role="tablist">
						<?php foreach($rand_kategori as $key => $ktgri) {?>
							<li role="presentation" class="<?php if($ktgri['id']==1){?>active<?php } ?>"><a href="#ktgori_<?= $ktgri['id']?>" aria-controls="<?= $ktgri['id_nama']?>" role="tab" data-toggle="tab"><?= $ktgri['nama_kategori']?></a></li>
						<?php } ?>
					</ul>
				</div><!--end title -->

				<!-- Tab panes -->
				<div class="tab-content">
					<?php foreach($rand_kategori as $key2 => $ktgri2) { ?>
						<div role="tabpanel" class="tab-pane <?php if($ktgri2['id']==$start) {?>active<?php } ?>" id="ktgori_<?= $ktgri2['id']?>">
							<div class="block_content">
								<div class="row">
									<?php if($ktgri2['prod']){?>
										<?php foreach($ktgri2['prod'] as $key3 => $prod) { ?>
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
											<div class="product-container">
												<div class="left-block">
													<div class="product-image-container">
														<a class="product_img_link" href="<?=base_url()?>single_produk/<?=$prod['id']?>" title="<?=$prod['nama_produk']?>">
															<img src="<?=base_url()?><?=$prod['produk_image']?>" alt="<?=$prod['nama_produk']?>" class="img-responsive" width="480" height="640">
														</a>
														<!-- Not Used Yet
														<span class="label-new label">New</span>
														<span class="label-sale label">Sale</span>
														<span class="label-reduction label">-5%</span> -->
													</div>
													<!-- Not Used Yet
													<div class="box-buttons">
															<a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
															<a class="button btn quick-view" href="#" title="Quick view">
																<i class="zmdi zmdi-eye"></i>
															</a>
															<a class="button btn addToWishlist" href="#" title="Add to my wishlist">
																<i class="zmdi zmdi-favorite-outline"></i>
															</a>
															<a class="button btn add_to_compare" href="#" title="Quick view">
																<i class="zmdi zmdi-refresh-alt"></i>
															</a>
													</div>-->
												</div><!--end left block -->
												<div class="right-block">
													<div class="product-box">
														<h5 class="name">
															<a class="product-name" href="<?=base_url()?>single_produk/<?=$prod['id']?>" title="<?=$prod['nama_produk']?>">
																<?=$prod['nama_produk']?>
															</a>
														</h5><!-- not used yet
														<div class="content_price">
															<span class="price product-price">$28.98</span>
															<span class="old-price product-price">$30.51</span>
														</div> -->
														<!-- Not used yet
														<div class="product_comments clearfix">
															<div class="product-rating">
																<div class="star_content">
																	<div class="star star_on"></div>
																	<div class="star star_on"></div>
																	<div class="star star_on"></div>
																	<div class="star star_on"></div>
																	<div class="star star_on"></div>
																</div>
															</div>
														</div><!-- end product_comments -->
													</div><!-- end product-box -->
												</div><!--end right block -->
											</div><!-- end product-container-->
										</div>
										<?php } ?>
									<?php }else{ ?>
										<h2 style="text-align:center;">
										Foto Produk Belum ada di Kategori ini
										</h2>
									<?php } ?>
								</div><!-- end row -->
							</div><!-- end block_content -->
						</div>
					<?php } ?>
				</div>
			</div><!-- end tabs-top -->
		</div><!-- end container -->
	</div><!-- end section-tabsproduct -->
	<!--
	<div class="section section-newsletter">
		<div class="container">
			<!-- start newsletter
			<div class="block-newsletter" id="block-newsletter">
				<h4 class="title_block">Daftar dan jadi langganan kami</h4>
				<p class="descript">Daftar sekarang untuk</p>
				<form action="#" method="post" class="form-inline">
					<div class="form-group">
						<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" placeholder="Enter your email...">
						<button type="submit" name="submitNewsletter" class="btn-primary btn button button-small">
							<span class="submit-icon"></span>
							<span class="submit-text">Subscribe</span>
						</button>               
					</div>
				</form>
			</div><!-- end block-newsletter 
		</div>
	</div><!-- end section section-newsletter -->

</div><!--end columns -->
