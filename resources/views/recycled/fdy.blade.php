
@extends('layouts.template')
@section('style')
<link rel="stylesheet" id="woocommerce-layout-css" href="{!!asset('/assets/custom/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.3.1')!!}" type="text/css" media="all">
<link rel="stylesheet" id="owl-carousel-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/owl.carousel1.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')

<!-- wraper_header_bannerinner -->
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid branner-rproduct vc_row-has-fill ">
    <div class="wpb_column vc_column_container vc_col-sm-12 ">
        <header class="woocommerce-products-header text-center">
            <h1 style="text-align: center" class="vc_custom_heading vc_custom_1520849723409">100% recycled polyester</h1>
        </header>
        <!-- #page -->
        <div id="page" class="site">
            <!-- #content -->
            <div id="content" class="site-content">
         <div class="tile" data-scale="1.1" data-image="{{ asset('assets/custom/images/product/fdy/1.jpg')}}"></div>
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
                                                        <img id="showfancy" data-zoom-image="{{ asset('assets/custom/images/product/fdy/1.jpg')}}"  width="600" src="{{ asset('assets/custom/images/product/fdy/1.jpg')}}" data-fancybox="images" data-caption="My caption" class="attachment-woocommerce_single size-woocommerce_single wp-post-image " alt="Fully Drawn Yarn9"  data-caption="" data-src="{{ asset('assets/custom/images/product/fdy/1.jpg')}}" data-large_image_width="600" data-large_image_height="800" >
                                                    </div>
                                                 
                                                </div>

                                               
                                            </figure>
                                        </div>
                                        <div class="summary entry-summary">
                                            <h1 class="product_title entry-title">100% Recycled FDY (Fully Drawn Yarn)</h1>
                                            <p class="price"><span class="woocommerce-Price-amount amount">Semi dull , Raw white / Dope dye black / Dope dye color</span>
                                            </p>
                                           
                                            <div class="table-responsive">
                                                    <table class="table table-sm pc-margin-top15 text-nowrap">
                                                        <tr >
                                                            <th class="text-center"colspan="2">FDY</th>
                                                        </tr>
                                                    
                                                        <tr class="text-left">
                                                            <td>Semi dull</td>
                                                            <td><p style="font-size:14px;"> 75-36, 75/72 , 100/36 , 150/48 , 150/96 , 300/96</p></td>
                                                            
                                                        </tr>             
                                                        <tr>
                                                            <td>Trilobal <br>bright</td>
                                                            
                                                            <td><p style="font-size:14px;">75/36 , 100/36 , 150/48 , 300/96</p></td>

                                                        </tr>
                                                        

                                                    </table>
                                                </div>
                                       

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
     
      for (var i = 1; i < 2; i++) {
          
              var p = $("#p"+i);
            
            $("#p"+i).click(function(){
                showfancy.attr("src", $(this).attr("src"));
                showfancy.attr("data-src", $(this).attr("src"));
            });
          
      }


});  
</script>
@endsection
