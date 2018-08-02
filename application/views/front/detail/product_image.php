<div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                        <div class="pb-left-column col-xs-12 col-sm-6">
                                 <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src='<?php echo base_url();?>uploads/products/<?php echo $pro_detail[0]['pro_feature']; ?>' data-zoom-image="<?php echo base_url();?>uploads/products/<?php echo $pro_detail[0]['pro_feature']; ?>"/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                                						<?php
											for($i=1;$i<6;$i++){
												?>
												<li>
                                                <a href="#" data-image="<?php echo base_url();?>uploads/products/p<?php echo $i; ?>.jpg" data-zoom-image="<?php echo base_url();?>uploads/products/p<?php echo $i; ?>.jpg">
                                                    <img id="product-zoom"  src="<?php echo base_url();?>uploads/products/p<?php echo $i; ?>.jpg" /> 
                                                </a>
											</li>
												<?php
											}											
											?>	

                                        </ul>
                                    </div>
									
									
                                </div>
                                <!-- product-imge-->
                            </div>
                         
                         
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name"><?php echo $pro_detail[0]['pro_name']; ?></h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="comments-advices">
                                        <a href="#">Based  on 3 ratings</a>
                                        <a href="#"><i class="fa fa-pencil"></i> write a review</a>
                                    </div>
                                </div>
                                <?php
                                 $sellPrice=$pro_detail[0]['pro_price']-($pro_detail[0]['pro_price']*$pro_detail[0]['pro_discount'])/100;
                                $price=round($sellPrice,2);
                                 ?>
                                <div class="product-price-group">
                                    <span class="price">$<?php echo $price; ?></span>
                                    <span class="old-price">$<?php echo $pro_detail[0]['pro_price']; ?></span>
                                    <span class="discount">-<?php echo $pro_detail[0]['pro_discount']; ?>%</span>
                                </div>
                                <div class="info-orther">
                                    <p>Item Code: #<?php echo $pro_detail[0]['sku']; ?></p>
                                    <p>Availability: <span class="in-stock">In stock</span></p>
                                    <p>Condition: <span style="color:white; background-color:green; padding:3px 10px 3px 10px; border-radius:10px;"><?php echo $pro_detail[0]['condition']; ?></span></p>
                                </div>
                                <div class="product-desc">
                                    <?php
                                        echo $pro_detail[0]['pro_description'];
                                     ?>
                                </div>
                                <div class="form-option">
                                    <p class="form-option-title">Available Options:</p>
                                    <div class="attributes">
                                        <div class="attribute-label">Color:</div>
                                        <div class="attribute-list">
							<select>
                                                <?php 
											$pro_color = '';
											$pro_color = explode(",", $pro_detail[0]['color']);
											foreach($pro_color as $val) {
												$val = trim($val);
												?>
												 <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
												<?php
											}											
											?>
                                            </select>		
                                           
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Qty:</div>
                                        <div class="attribute-list product-qty">
                                            <div class="qty">
                                                <input id="option-product-qty" type="text" value="1">
                                            </div>
                                            <div class="btn-plus">
                                                <a href="#" class="btn-plus-up">
                                                    <i class="fa fa-caret-up"></i>
                                                </a>
                                                <a href="#" class="btn-plus-down">
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Size: </div>								
                                        <div class="attribute-list">
                                            <select>	
											<?php 
											$pro_size = '';
											$size = explode(",", $pro_detail[0]['pro_size']);
											foreach($size as $val) {
												$val = trim($val);
												?>
												 <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
												<?php
											}											
											?>
                                            </select>
                                            <a id="size_chart" class="fancybox" href="<?php echo base_url(); ?>uploads/products/p5.jpg">Size Chart</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-action">
                                    <div class="button-group">
                                        <a class="btn-add-cart" href="#">Add to cart</a>
                                    </div>
                                    <div class="button-group">
                                        <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                        <br>Wishlist</a>
                                        <a class="compare" href="#"><i class="fa fa-signal"></i>
                                        <br>        
                                        Compare</a>
                                    </div>
                                </div>
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Product Details</a>
                                </li>
                                <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#information">information</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">reviews</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#extra-tabs">Extra Tabs</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#guarantees">guarantees</a>
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                   <?php echo $pro_detail[0]['pro_detail']; ?>
                                </div>
                                <div id="information" class="tab-panel">
                                     <?php echo $pro_detail[0]['information']; ?>
                                </div>
                                <div id="reviews" class="tab-panel">
						<!--	
                                    <div class="product-comments-block-tab">
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Jame</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
                                            </div>
                                        </div>
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Author</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
                                            </div>
                                        </div>
                                        <p>
                                            <a class="btn-comment" href="#">Write your review !</a>
                                        </p>
                                    </div>
                                  -->   
                                </div>
                                <div id="extra-tabs" class="tab-panel">
                                     <?php echo $pro_detail[0]['extra_info']; ?>
                                </div>
                                <div id="guarantees" class="tab-panel">
                                     <?php echo $pro_detail[0]['guarantees']; ?>
					</div>
                            </div>
                        </div>


                                