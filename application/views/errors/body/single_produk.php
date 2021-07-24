<div id="breadcrumb" class="clearfix">
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
			<div class="pb-left-column col-xs-12 col-sm-12 col-md-5">
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
			<div class="pb-center-column col-xs-12 col-sm-12 col-md-7">
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
								<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
								<li><a href="#"><em class="fa fa-linkedin"></em></a></li>
								<li><a href="#"><em class="fa fa-pinterest"></em></a></li>
								<li class="last"><a href="#"><em class="fa fa-instagram"></em></a></li>
							</ul>
						</div><!-- end share-social -->
					</div><!-- end box-cart-bottom -->
				</div><!-- end pb-centercolumn -->
			</div><!-- end pb-center-column -->
			</form>
			<!-- NOT NEEDED YET
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="tabs-top accordion-info">
					<ul id="myTabs" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
						<li role="presentation"><a href="#additional-info" aria-controls="additional-info" role="tab" data-toggle="tab">Additional infomation</a></li>
						<li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="description">
							<div class="panel-body">
								<p>Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. Always remember in the jungle there’s a lot of they in there, after you overcome they, you will make it to paradise.</p>
								<p>I told you all this before, when you have a swimming pool, do not use chlorine, use salt water, the healing, salt water is the healing. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. You see that bamboo behind me though, you see that bamboo? Ain’t nothin’ like bamboo. Bless up. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key, Lion! Always remember in the jungle there’s a lot of they in there, after you overcome they, you will make it to paradise.</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="additional-info">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered">      
										<tbody>
											<tr class="odd">   
												<td>Compositions</td>
												<td>Cotton</td>
											</tr>
											<tr class="even">   
												<td>Styles</td>
												<td>Casual</td>
											</tr>
											<tr class="odd">   
												<td>Properties</td>
												<td>Short Sleeve</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="reviews">
							<div class="panel-body">
								<div class="comments-review">
									<div class="comments-list">
										<div class="media comments">
											<div class="pull-left">
												<p class="avatar">
													<img src="img/default/avatar/avatar1.jpg" alt="" width="70" height="70">
												</p>
												<div class="star_content">
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
												</div>
												<p class="author">Tiva</p>
											</div>
											<div class="media-body">
												<p class="comment-datetime">June 17, 2017</p>
												<div class="comment-desc">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
											</div>
										</div>
									</div>
									<div class="comments-list">
										<div class="media comments">
											<div class="pull-left">
												<p class="avatar">
													<img src="img/default/avatar/avatar2.jpg" alt="" width="70" height="70">
												</p>
												<div class="star_content clearfix">
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
												</div>
												<p class="author">Tiva</p>
											</div>
											<div class="media-body">
												<p class="comment-datetime">June 17, 2017</p>
												<div class="comment-desc">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
											</div>
										</div>
									</div>
									<div class="review-form">
										<h4 class="title_block">Write a review</h4>
										<div class="reviews">
											<form id="form_review" action="/vietnam-tours" method="post" class="form-validate width_common">
												<div class="form-group">
													<label>You rate</label>
													<div class="star_content clearfix">
														<div class="star"></div>
														<div class="star"></div>
														<div class="star"></div>
														<div class="star"></div>
														<div class="star"></div>
													</div>
												</div>
												<div class="form-group">
													<label>You review<sup class="required">*</sup></label>
													<textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
												</div>
												<div class="form-group btn-send">
													<button class="btn btn-default">Send your review</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- end tab-content
				</div> <!-- end accordion-info
			</div>-->
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

