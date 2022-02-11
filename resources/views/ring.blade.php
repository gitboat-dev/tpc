
@extends('layouts.template')
@section('style')
<link rel="stylesheet" id="woocommerce-layout-css" href="{!!asset('/assets/custom/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.3.1')!!}" type="text/css" media="all">
<link rel="stylesheet" id="owl-carousel-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/owl.carousel1.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')

<!-- wraper_header_bannerinner -->
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid branner-product vc_row-has-fill ">
    <div class="wpb_column vc_column_container vc_col-sm-12 ">
        <header class="woocommerce-products-header text-center">
            <h1 style="text-align: center" class="vc_custom_heading vc_custom_1520849723409">Polyester Products</h1>
        </header>
        <!-- #page -->
        <div id="page" class="site">
            <!-- #content -->
            <div id="content" class="site-content">
         <div class="tile" data-scale="1.1" data-image="{{ asset('assets/custom/images/product/ring/1.jpg')}}"></div>
                <!-- wraper_shop_single -->
                <div class="wraper_shop_single">
                    <div class="container">
                        <!-- row -->
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!-- shop_single -->
                                <div class="shop_single">
                                    <div id="product-3981" class="post-3981 product type-product status-publish has-post-thumbnail product_cat-general product_tag-invitation first instock shipping-taxable purchasable product-type-simple">
                                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="transition: opacity .25s ease-in-out;">
                                            <!--  image -->

                                            <figure class="woocommerce-product-gallery__wrapper">
                                                 <div class="woocommerce-product-gallery__image product-details-big-image-slider-wrapper"style="margin-bottom:15px;">
                   
                                                     <div class="single-image">
                                                        <img id="showfancy" data-zoom-image="{{ asset('assets/custom/images/product/ring/1.jpg')}}"  width="600" src="{{ asset('assets/custom/images/product/ring/1.jpg')}}" data-fancybox="images" data-caption="My caption" class="attachment-woocommerce_single size-woocommerce_single wp-post-image  " alt="Ring Spun6"  data-caption="" data-src="{{ asset('assets/custom/images/product/ring/1.jpg')}}" data-large_image_width="600" data-large_image_height="800" >
                                                    </div>
                                                 
                                                </div>

                                                <div class="clients owl-carousel element-one owl-nav-style-one owl-dot-style-one ">
                                               <!--  {{-- <div class="clients owl-carousel element-one owl-nav-style-one owl-dot-style-one " data-owl-nav="false" data-owl-dots="false" data-owl-loop="true" data-owl-autoplay="true" data-owl-autoplay-timeout="6" data-owl-mobile-items="3" data-owl-tab-items="3" data-owl-desktop-items="3"> --}} -->
                                                    <?php
                                                    for ($i=1; $i < 3 ; $i++) { ?>
                                                         <div class="woocommerce-product-gallery__image single-image single-image-select">
                                                     
                                                            <img id="p{{$i}}" width="600" data-zoom-image="{{ asset('assets/custom/images/product/ring/'.$i.'.jpg')}}" src="{{ asset('assets/custom/images/product/ring/'.$i.'.jpg')}}" class="attachment-woocommerce_single size-woocommerce_single bdcolor" alt="Ring Spun7" data-caption="" data-src="{{ asset('assets/custom/images/product/ring/'.$i.'.jpg')}}" data-large_image_width="600" data-large_image_height="800" >
                                                    
                                                        </div>
                                                    <?php }?>
                                                  
                                                </div>

                                            </figure>
                                        </div>
                                        <div class="summary entry-summary">
                                            <h1 class="product_title entry-title mb-font24">Ring Spun</h1>
                                            <h2 class="h2seo"><span class="woocommerce-Price-amount amount">Semi dull , Raw white / Dope dye color, Melange</span>
                                            </h2>
                                            <div class="woocommerce-product-details__short-description">
                                                <div class="woocommerce-product-details__short-description">
                                                    <div class="row mb-2">
                                                        <div class="col-5 col-md-3"><p>Packing :</p></div>
                                                        <div class="col-7 col-sm-9 mb-margin-left8 ipad-marginleft0" style="margin-left: -8%;"><p>2.5 kg. : cone</p><p> 12 cones : PP bag</p><p>420 PP bags : 1x20 ’FCL</p> <p>840 PP bags : 1x40 ’FCL </p></div>
                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>
                                        <div class="table-responsive">
                                            <table class="table table-sm pc-margin-top15 text-nowrap">
                                                <tr>
                                                    <th colspan="13"class="text-center">Ring Spun</th>
                                                </tr>                                          
                                                <tr>
                                                    <td><p style="font-size:14px;">10/1<br><br>28/1</p></td>
                                                    <td><p style="font-size:14px;">12/1<br><br>30/1 </p></td>
                                                    <td><p style="font-size:14px;">14/1<br><br>32/1 </p></td>
                                                    <td><p style="font-size:14px;">16/1<br><br>34/1 </p></td>
                                                    <td><p style="font-size:14px;">18/1<br><br>40/1 </p></td>
                                                    <td><p style="font-size:14px;">20/1<br><br>45/1 </p></td>
                                                    <td><p style="font-size:14px;">24/1<br> </p></td>
                                                </tr>
                                                <tr>
                                                    <td><p style="font-size:14px;">10/2<br><br>28/2</p></td>
                                                    <td><p style="font-size:14px;">12/2<br><br>30/2 </p></td>
                                                    <td><p style="font-size:14px;">14/2<br><br>32/2 </p></td>
                                                    <td><p style="font-size:14px;">16/2<br><br>34/2 </p></td>
                                                    <td><p style="font-size:14px;">18/2<br><br>40/2 </p></td>
                                                    <td><p style="font-size:14px;">20/2<br><br>45/2 </p></td>
                                                    <td><p style="font-size:14px;">24/2<br> </p></td>
                                                </tr>
                                             

                                            </table>
                                        </div>
                                            <!-- {{-- <form class="cart" action="#" method="post" enctype='multipart/form-data'> -->
                                                <div class="text-center">
                                                    <button type="submit" name="add-to-cart" value="3981" class="single_add_to_cart_button button alt">Contact</button>
                                                </div>
                                            <!-- </form> --}} -->

                                        </div>
                                        <!-- .summary -->
                                        <div class="clearfix"></div>



                                    </div>
                                    <!-- #product-3981 -->
                                </div>
                                <!-- shop_single -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                </div>
                <!-- wraper_shop_single -->

            </div>
            <!-- #content -->
        </div>
        <!-- #page -->

    </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
<!-- wraper_header_bannerinner -->


@endsection
@section('custom-script')
<script>
    jQuery(document).ready(function($){
    var showfancy = $("#showfancy");
    // data-src
     
      for (var i = 1; i < 3; i++) {
          
              var p = $("#p"+i);
            
            $("#p"+i).click(function(){
                showfancy.attr("src", $(this).attr("src"));
                showfancy.attr("data-src", $(this).attr("src"));
            });
          
      }


});  
</script>
@endsection
