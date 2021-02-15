<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <? $this->load->view('watchshop/inc/title') ?>
</head>

<body>
    
    <?php $this->load->view('watchshop/inc/header') ?>

    <main>
        
        <?php //$this->load->view('watchshop/index-slide') ?>
     
        <!--? Popular Items Start -->
        <div class="popular-items section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle text-center">
                            <h2><?php echo lang('popularitem'); ?>(<?php echo $total_rows;?>)</h2>      
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($products as $product) { 
                        $filepath = "product/pro_{$product->pro_id}01.jpg";
                        ?> 

                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="<?=base_url($filepath) ?>" alt="">
                                <div class="img-cap">
                                    <span><?php echo lang('addcart');?></span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                 <h3><a href="<?php echo base_url("Home/productDetail/$product->pro_id"); ?>"><?php echo $lang=='TH'?$product->pro_name_th:$product->pro_name_en; ?></a></h3>
                                <span><?php echo number_format($product->pro_price,2); echo $lang=='TH'?' บาท':' Baht' ?></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <?php echo $links; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->
      
        <?php //$this->load->view('watchshop/index-condition') ?>
    </main>
    <?php $this->load->view('watchshop/inc/footer') ?>

    <?php $this->load->view('watchshop/inc/script') ?>
    <?php $this->load->view('watchshop/inc/css') ?>
    
</body>
</html>