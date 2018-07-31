<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
        $this->load->view('include/detail1_head_script');
    ?> 
    
    <title>Kute shop - themelock.com</title>
</head>
<body class="product-page right-sidebar">

<div id="header" class="header">
<div class="top-header">
    <?php 
        $this->load->view('include/detail_top_header');
    ?> 
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <?php 
        $this->load->view('include/detail_main_header');
    ?> 
    <!-- END MANIN HEADER -->
    <?php 
        $this->load->view('include/detail_navmenu_header');
    ?>     
</div>

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <?php $this->load->view('include/detail3_breadcrumb'); ?> 
        <!-- ./breadcrumb -->
        
        
        <!-- row -->
        <div class="row">

            <!-- Left colunm -->
            <?php $this->load->view('include/detail3_Left-colunm'); ?>
            <!-- ./left colunm -->

            <!-- Center colunm-->

            <!-- Product-image -->
                <?php $this->load->view('front/detail/product_image'); ?>              
              <!-- ./tab product -->


            <!-- Related Product -->
                <?php $this->load->view('front/detail/related_product'); ?>
             <!-- ./box product -->

                        <!-- box product -->
            <!-- You might also like -->
			<?php $this->load->view('front/detail/also_like_product'); ?>     
                        <!-- ./box product -->
		</div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>

<!-- Footer -->
<?php $this->load->view('include/footer'); ?>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery/jquery-1.11.2.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.elevatezoom.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery-ui/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/fancyBox/jquery.fancybox.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/jquery.actual.min.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/theme-script.js"></script>

</body>
</html>
