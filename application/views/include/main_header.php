<div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="<?php echo site_url(); ?>"><img alt="Kute shop - themelock.com" src="<?php echo base_url(); ?>public/assets/images/logo.png" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline">
                      <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">All Categories</option>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text"  placeholder="Keyword here...">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div id="cart-block " class="col-xs-5 col-sm-2 shopping-cart-box">
                
                <a class="cart-link" href="order.html" id="count_cart">
                    <span class="title">Shopping cart</span>
                    <span class="total"><?php echo count($this->cart->contents())?> items - <?php echo number_format($this->cart->total(),2); ?> $</span>
                    <span class="notify notify-left"><?php echo count($this->cart->contents()); ?></span>
                </a>
                <div class="cart-block" id="detail_cart">
                    <div class="cart-block-content">
                        <h5 class="cart-title">2 Items in my cart</h5>
                        <div class="cart-block-list" >
                            <ul>
                                <?php 
                            foreach ($this->cart->contents() as $items) {
                                //$no++;
                                $output .='

                                <li class="product-info">
                                    <h4 class="p-name" style="padding:10px 5px 10px 5px;">​ '.$items['name'].'</h4>
                                        <div class="p-left"> 
                                            <a href="#">
                                            <img class="img-responsive" style="height:94px;" src="'. base_url() .'uploads/products/p2.jpg" alt="p2">
                                            </a>
                                        </div>
                                        <div class="p-right">                       
                                            <p>Price:<i class="p-rice">'.number_format($items['price'],2).'$</i></p>
                                            <p>Qty: '.$items['qty'].'</p>
                                            <p>Amount: '.number_format($items['subtotal'],2).'$</p>

                                            

                                            <button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">X</button>
                                            
                                        </div>
                                    </li>                                                        
                                ';
                            }

                            ?>
                            <div class="toal-cart">
                                <span>Total</span>
                                <span class="toal-price pull-right">'<?php echo number_format($this->cart->total(),2); ?>$</span>
                            </div>

                            </ul>

                        </div>
                        
                        <div class="cart-buttons">
                            <a href="order.html" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        
    </div>
