
    <!doctype html>
<html class="no-js" lang="zxx">
<head>
    <? $this->load->view('watchshop/inc/title') ?>
</head>

<body>
    
    <?php $this->load->view('watchshop/inc/header'); ?>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Watch Shop</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $filepath = "product/pro_{$products->pro_id}01.jpg";
        ?>
        <!-- Hero Area End-->
        <!--================Single Product Area =================-->
        <div class="product_image_area">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">
                        <img src="<?=base_url($filepath) ?>" alt="#" class="img-fluid">
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="single_product_text text-center">
                    <h3><?php echo $lang=='TH'?$products->pro_name_th:$products->pro_name_en; ?></h3>
                    <p>
                        <?php echo $lang=='TH'?$products->pro_desc_th:$products->pro_desc_en; ?>
                    </p>
                    <div class="card_area">
                        
                            <?php $attr=array('method'=>'post','id'=>'frmcart','name'=>'frmcart','class'=>'form-control');
                                $hidden = array('pro_id'=>$products->pro_id,'pro_price'=>$products->pro_price);
                                echo form_open("Webcart/add",$attr,$hidden);
                            ?>
                                <div class="product_count_area">
                                    <p><?php echo lang('quantity');?></p>
                                    <div class="product_count d-inline-block">
                                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                        <input class="product_count_item input-number" name="qty" type="text" value="1" min="0" max="10">
                                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                    <p><?php echo number_format($products->pro_price,2); echo $lang=='TH'?' บาท':' Baht' ?></p>
                                </div>
                            <div class="add_to_cart">
                                <button type="submit" class="btn_3"><?php echo lang('addcart');?></button>
                            </div>
                            <?php echo form_close();?>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        
    </main>
    
    <?php $this->load->view('watchshop/inc/footer') ?>

    <?php $this->load->view('watchshop/inc/script') ?>
    <?php $this->load->view('watchshop/inc/css') ?>
    
</body>
</html>