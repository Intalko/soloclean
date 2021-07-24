<div id="breadcrumb" class="clearfix" style="background-image: url(<?=base_url()?>includes/frontend/img/banner/banner3.jpg);">
	<div class="container">
		<div class="breadcrumb clearfix">
			<ul class="ul-breadcrumb">
				<li><a href="<?=base_url()?>" title="Home">Beranda</a></li>
				<li><a href="<?=base_url()?>produk/<?=$produk['id_kategori']?>" title="<?=$produk['nama_kategori']?>"><?=$produk['nama_kategori']?></a></li>
				<li><span><?=$produk['nama_produk']?></span></li>
			</ul>
			<h2 class="bread-title">Detail Produk</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="row">
			<form method = "post" action="<?=base_url()?>pesan">
			<input type="hidden" name="id_produk" value="<?=$produk['id']?>" />
			<div class="pb-left-column col-xs-12 col-sm-12 col-md-6">
				<div id="image-block" class="clearfix">
					<div id="view_full_size">
						<img src="<?=base_url()?><?=$produk['produk_image']?>" alt="<?=$produk['nama_produk']?>" class="img-responsive" title="<?=$produk['nama_produk']?>" width="470" height="627">
					</div>
				</div><!-- end #image-block -->
				<!--<div id="views_block" class="clearfix">
					<div id="thumbs_list">
						<ul id="thumbs_list_frame" class="list-inline">
							<li class="first">
								<img src="<?=base_url()?>includes/frontend/img/product/2.jpg" alt="The Cottage Bouquet" class="img-responsive" width="102" height="136">
							</li>
							<li>
								<img src="<?=base_url()?>includes/frontend/img/product/1.jpg" alt="The Cottage Bouquet" class="img-responsive" width="102" height="136">
							</li>
							<li>
								<img src="<?=base_url()?>includes/frontend/img/product/3.jpg" alt="The Cottage Bouquet" class="img-responsive" width="102" height="136">
							</li>
							<li class="last">
								<img src="<?=base_url()?>includes/frontend/img/product/4.jpg" alt="The Cottage Bouquet" class="img-responsive" width="102" height="136">
							</li>
						</ul>
					</div>
				</div><!-- end views_block -->
			</div><!-- end pb-left-column -->
			<div class="pb-center-column col-xs-12 col-sm-12 col-md-6">
				<div class="pb-centercolumn">
					<h1><?=$produk['nama_produk']?></h1>
					<div class="product_comments clearfix">
						<div class="product-rating">
							<div class="star_content">
								<?php for($i =0;$i<$star;$i++) {?>
									<div class="star star_on"></div>
								<?php } ?>
								<?php $off = 5-$star; for($y = 0;$y<$off;$y++){?>
									<div class="star"></div>
								<?php } ?>
							</div>
						</div>
					</div><!-- end product_comments -->
					<!--
					<div class="product-boxinfo">
						<p id="product_reference">
							<label>Reference: </label>
							<span class="editable">123456</span>
						</p>
						<p id="availability_statut">
							<label>Available: </label>
							<span id="availability_value" class="label label-success">In stock</span>
						</p>
					</div><!-- end product-boxinfo -->
					<!--
					<div id="short_description_block">
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum anteposuerit est notare quam littera</p>
					</div><!-- end short_description_block -->
					<div class="box-info-product clearfix">
						<div id="attributes">
							<!-- Not Used Yet
							<div class="attribute_fieldset clearfix">
								<label class="attribute_label">Scent</label>
								<div class="attribute_list">
									<select class="form-control">
										<option value="0">Please choose one</option>
										<option value="1">Fresh Cut Roses</option>
										<option value="2">Japanese Cherry Blossom</option>
										<option value="3">Lilac Blossoms</option>
										<option value="4">Black Raspberry Vanilla</option>
										<option value="5">Strawberry Lemonade</option>
									</select>
								</div>
							</div>-->
							<div class="attribute_fieldset clearfix">
								<label class="attribute_label">Ukuran</label>
								<div class="attribute_list">
									<select class="form-control" name="ukuran">
										<option value="0" disabled>Pilih salah satu</option>
										<option value="Standart">Standart</option>
										<option value="Deluxe">Deluxe</option>
										<option value="Special">Special</option>
									</select>
								</div>
							</div>
						</div>
						<div id="quantity_wanted_p">
							<label>Jumlah</label>
							<div class="group-quantity">
								<input type="number" min="1" name="qty" class="text form-control" value="1" />
							</div>
						</div>
					</div><!-- end box-info-product -->
					<div class="box-cart-bottom clearfix">
						<button id="pesan_sekarang" type="submit" class="exclusive btn button btn-primary" title="Pesan Sekarang">
							Pesan Sekarang
						</button>
						<div class="share-social">
							<span>Bagikan:</span>
							<ul class="links list-inline">
								<li><a href="#"><em class="fa fa-facebook"></em></a></li>
								<li><a href="#"><em class="fa fa-twitter"></em></a></li>
								<li class="last"><a href="#"><em class="fa fa-instagram"></em></a></li>
							</ul>
						</div><!-- end share-social -->
					</div><!-- end box-cart-bottom -->
				</div><!-- end pb-centercolumn -->
			</div><!-- end pb-center-column -->
			</form>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="tabs-top accordion-info">
					<ul id="myTabs" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="description">
							<div class="panel-body">
								<p><?=$produk['penjelasan']?></p>
							</div>
						</div>
					</div> <!-- end tab-content -->
				</div> <!-- end accordion-info -->
			</div>
		</div><!-- end row -->
		<hr/>
		<div class="blockproductscategory block">
			<h4 class="title_block">Produk Lainnya</h4>
			<div class="block_content">
				<div class="owl-row">
					<div class="blockproductscategory_grid">
					<?php foreach ($group_produk as $key) { ?>
						<div class="item">
							<div class="product-container">
								<div class="left-block">
									<div class="product-image-container">
										<a class="product_img_link" href="<?=base_url()?>single_produk/<?=$key['id']?>" title="<?=$key['nama_produk']?>">
											<img src="<?=base_url()?><?=$key['produk_image']?>" alt="<?=$key['nama_produk']?>" class="img-responsive image-effect" width="480" height="640">
										</a>
										<!-- not used yet
										<span class="label-new label">New</span>
										<span class="label-sale label">Sale</span>
										<span class="label-reduction label">-5%</span>-->
									</div>
									<!--not used yet
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
											<a class="<?=$key['nama_produk']?>" href="<?=base_url()?>single_produk/<?=$key['id']?>" title="<?=$key['nama_produk']?>">
												<?=$key['nama_produk']?>
											</a>
										</h5>
										<!--! not used yet
										<div class="content_price">
											<span class="price product-price">$28.98</span>
											<span class="old-price product-price">$30.51</span>
										</div> -->
										<div class="product_comments clearfix">
											<div class="product-rating">
												<div class="star_content">
													<?php $star_p = round($key['pesan']/5); for($j =0;$j<$star_p;$j++) {?>
														<div class="star star_on"></div>
													<?php } ?>
													<?php $off_p = 5-$star_p; for($z = 0;$z<$off_p;$z++){?>
														<div class="star"></div>
													<?php } ?>
												</div>
											</div>
										</div><!-- end product_comments -->
									</div><!-- end product-box -->
								</div><!--end right block -->
							</div><!-- end product-container-->
						</div>
						<?php } ?>
					</div><!-- end blockproductscategory_grid -->
				</div><!-- end tabproduct-carousel -->
			</div>
		</div><!-- end blockproductscategory -->
	</div> <!-- end container -->
</div><!--end warp-->

