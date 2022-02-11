
@extends('layouts.template')
@section('content')

<!-- #page -->


<div id="page" class="site">
    <!-- #content -->
    <div id="content" class="site-content">
       <!--  <div class="container-fluid">
            <img src="{{ asset('assets/custom/images/product/picrecycle/banner.jpg')}}" class="img-fluid">
        </div> -->
        

            <div class="container" style="margin-bottom: -25px;">
                <!-- row -->
                <div class="row wow fadeInUp animated">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="vc_row-full-width vc_clearfix"></div>
                        <!-- หน้าจอpc -->
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="hidden-xs hidden-sm vc_row wpb_row vc_row-fluid bgr-product-pc vc_row-has-fill " >
                            <div class="container-fluid">
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 text-center" style="margin-top: -60px;">
                                         <img alt="logo" src="{{ asset('assets/custom/images/product/picrecycle/logo.png')}}" class="shadowed img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="form-row">
                                    <div class="col-lg-3 col-md-3 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle psf" href="{!!url('/recycled-polyester-staple-fiber')!!}">
                                                <img src="{{ asset('assets/custom/images/product/picrecycle/1.png')}}" style="width: 200px;" class=" shadowed img-fluid" alt="Recycled PSF2">
                                            </a><br>
                                            <a title="recycle psf1" href="{!!url('/recycled-polyester-staple-fiber')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled PSF</h4></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 text-center">
                                        
                                    </div>
                                    <div class="col-lg-4 col-md-4 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle oe" href="{!!url('/recycled-open-end')!!}">
                                              <img src="{{ asset('assets/custom/images/product/picrecycle/2.png')}}" style="width: 200px;" class=" shadowed img-fluid" alt="Recycled OE2">
                                            </a>
                                            <a title="recycle oe1" href="{!!url('/recycled-open-end')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled OE</h4></a>
                                        </div>

                                    </div>
                                    <div class="col-lg-1 col-md-1 text-center">
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle fdy" href="{!!url('/recycled-fully-drawn-yarn')!!}">
                                              <img src="{{ asset('assets/custom/images/product/picrecycle/3.png')}}" style="width: 200px;" class=" shadowed img-fluid" alt="Recycled FDY2">
                                            </a>
                                            <a title="recycle fdy1" href="{!!url('/recycled-fully-drawn-yarn')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled FDY</h4></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="form-row">
                                    <div class="col-lg-2 col-md-2 text-center">
                                         
                                    </div>
                                    <div class="col-lg-3 col-md-3 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle dty" href="{!!url('/recycled-draw-textured-yarn')!!}">
                                              <img src="{{ asset('assets/custom/images/product/picrecycle/4.png')}}" style="width: 200px;" class=" shadowed img-fluid" alt="Recycled DTY2">
                                            </a>
                                            <a title="recycle dty1" href="{!!url('/recycled-draw-textured-yarn')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled DTY</h4></a>
                                        </div>

                                    </div>
                                    <div class="col-lg-2 col-md-2 text-center">
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle ring spun" href="{!!url('/recycled-ring-spun')!!}">
                                              <img src="{{ asset('assets/custom/images/product/picrecycle/5.png')}}" style="width: 200px;" class=" shadowed img-fluid" alt="Recycled Ring Spun2">
                                            </a>
                                            <a title="recycle ring spun1" href="{!!url('/recycled-ring-spun')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled Ring Spun</h4></a>
                                        </div>

                                    </div>
                                    <div class="col-lg-2 col-md-2 text-center">
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <!-- จบหน้าจอpc -->
                        <div class="vc_row-full-width vc_clearfix"></div>


                        <!-- หน้าจอmobile -->
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="hidden-lg hidden-md vc_row wpb_row vc_row-fluid bgr-product-mb vc_row-has-fill ">
                            <div class="container-fluid">
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 text-center">
                                         <img src="{{ asset('assets/custom/images/product/picrecycle/logo.png')}}" alt="ECOTCP2" class="shadowed img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="form-row">
                                    <div class="col-lg-3 col-md-3 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle psf" href="{!!url('/recycled-polyester-staple-fiber')!!}">
                                                <img src="{{ asset('assets/custom/images/product/picrecycle/1.png')}}" style="width: 200px;" class=" shadowed img-fluid" alt="Recycled PSF2">
                                            </a><br>
                                            <a title="recycle psf1" href="{!!url('/recycled-polyester-staple-fiber')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled PSF</h4></a>
                                    </div>
                                    </div>
                                    <div class="col-lg-1 col-md-2 text-center">
                                        
                                    </div>
                                    <div class="col-lg-4 col-md-4 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle oe" href="{!!url('/recycled-open-end')!!}">
                                              <img src="{{ asset('assets/custom/images/product/picrecycle/2.png')}}" style="width: 200px;" class=" shadowed img-fluid" alt="Recycled OE2">
                                            </a>
                                            <a title="recycle oe1" href="{!!url('/recycled-open-end')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled OE</h4></a>
                                        </div>

                                    </div>
                                    <div class="col-lg-1 col-md-2 text-center">
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle fdy" href="{!!url('/recycled-fully-drawn-yarn')!!}">
                                              <img src="{{ asset('assets/custom/images/product/picrecycle/3.png')}}" style="width: 200px;" class=" shadowed img-fluid" alt="Recycled FDY">
                                            </a>
                                            <a title="recycle fdy1" href="{!!url('/recycled-fully-drawn-yarn')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled FDY</h4></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="form-row">
                                    <div class="col-lg-2 col-md-2 text-center">
                                         
                                    </div>
                                    <div class="col-lg-3 col-md-3 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle dty" href="{!!url('/recycled-draw-textured-yarn')!!}">
                                              <img src="{{ asset('assets/custom/images/product/picrecycle/4.png')}}" style="width: 200px;" class=" shadowed img-fluid" alt="Recycled DTY2">
                                            </a>
                                            <a title="recycle dty" href="{!!url('/recycled-draw-textured-yarn')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled DTY</h4></a>
                                        </div>

                                    </div>
                                    <div class="col-lg-2 col-md-2 text-center">
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-3 text-center wow zoomIn">
                                        <div class="jm-logo">
                                            <a title="recycle ring" href="{!!url('/recycled-ring-spun')!!}">
                                              <img src="{{ asset('assets/custom/images/product/picrecycle/5.png')}}" style="width: 200px;" class=" shadowed img-fluid ring1" alt="Recycled Ring Spun2">
                                            </a>
                                            <a title="recycle" href="{!!url('/recycled-ring-spun')!!}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h4 class="seoproname text-center">100% Recycled Ring Spun</h4></a>
                                        </div>

                                    </div>
                                    <div class="col-lg-2 col-md-2 text-center">
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <!-- จบหน้าจอmobile -->

                      <!--   <div class="hidden-xs">aaaaaaaaaaaaaa</div>
                        <div class="hidden-lg hidden-md">bbbbbbbbbbbbb</div> -->
                            
                            
                        
                        <div class="vc_row-full-width vc_clearfix"></div>

                    </div>
                </div>
                <!-- row -->
            </div>

       


    <!-- #content -->
    </div>
</div>
<!-- #page -->
@endsection
