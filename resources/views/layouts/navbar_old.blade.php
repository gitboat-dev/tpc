

<header class="wraper_header style-one">
    <!-- wraper_header_top -->
    <div class="wraper_header_top visible-lg visible-md visible-sm hidden-xs">
        <div class="container">
            <!-- row -->
            <div class="row header_top">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- header_top_item -->
                    <div class="header_top_item text-left">
                        <ul class="contact">
                            <li class="phone"><a title="Telephone Number thai polyester" href="tel:+66 34 852371">+66 34 852371 to 2 </a></li>
                            <li class="email"><a title="Email thai polyester" href="mailto: sales@thaipolyester.com"> sales@thaipolyester.com</a></li>
                        </ul>
                    </div>
                    <!-- header_top_item -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- header_top_item -->
                    <div class="header_top_item text-right">
                        <!-- social -->
                        <ul class="social">
                            <li class="google-plus"><a title="video thai polyester" href="https://www.youtube.com/channel/UC1XsjddKcjF7sOcQIsXHnSQ?view_as=subscriber" target=&quot;_blank&quot;><i class="fa fa-youtube-play"></i></a></li>
                            <li class="facebook"><a title="fanpage thai polyester" href="https://www.facebook.com/EcoTPC-101465111232392" target=&quot;_blank&quot;><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a title="linkedin thai polyester" href="https://www.linkedin.com/company/thai-polyester-co-ltd/" target=&quot;_blank&quot;><i class="fa fa-linkedin"></i></a></li>

                        </ul>
                        <!-- social -->
                    </div>
                    <!-- header_top_item -->
                </div>
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- wraper_header_top -->
    <!-- wraper_header_main -->
    <div class="wraper_header_main i-am-sticky">
        <div class="container">
            <!-- header_main -->
            <div class="header_main" >
                <!-- brand-logo -->
                <div class="brand-logo" >

                    <a title="logo thai polyester" href="{!!url('/')!!}" ><img alt="logo thai polyester" src="{{ asset('assets/custom/images/home/logo.webp')}}?v={{date('YmdHis')}}" {{-- style="margin-top: 2px; margin-bottom: 15px;" --}} class="mb-logo" width="303" height="60"></a>

                     <!-- responsive-nav -->
                    <div class="responsive-nav hidden-lg hidden-md visible-sm visible-xs" data-responsive-nav-displace="true">
                        <i class="fa fa-bars"></i>
                    </div>
                     <!-- responsive-nav -->
                </div>



                <!-- brand-logo -->
                <!-- header_main_action -->
                <div class="header_main_action">
                    <ul>
                        <li class="floating-searchbar">
                         <!--    <i class="fa fa-search"></i>
                            <i class="fa fa-times"></i> -->
                            <!-- floating-search-bar -->
                            <div class="floating-search-bar">
                                <form role="search" method="get" class="search-form" action="https://themes.radiantthemes.com/consultix/demo-three/">
                                    <div class="form-row">
                                        <input type="search" placeholder="Search..." value="" name="s" required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- floating-search-bar -->
                        </li>

                    </ul>
                </div>
                <!-- header_main_action -->


                <!-- nav -->
                <nav class="nav visible-lg visible-md hidden-sm hidden-xs">
                    <div class="menu-header-menu-container" {{-- style="margin-top: 5px;" --}}>
                        <ul id="menu-header-menu" class="menu rt-mega-menu-transition-slide">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-293 current_page_item menu-flyout rt-mega-menu-hover item-534 @if(isset($active_home)){{$active_home}}@endif"><a title="home" class="amenu" href="{!!url('/')!!}">Home</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-293 current_page_item menu-flyout rt-mega-menu-hover item-534 @if(isset($active_about)){{$active_about}}@endif"><a title="about us" class="amenu" href="{!!url('/about')!!}">About us</a></li>
                            <li id="menu-item-1010" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-flyout rt-mega-menu-hover item-1010 @if(isset($active_product)){{$active_product}}@endif"><a class="amenu" title="products" href="{!!url('/polyester-products')!!}">Products</a>
                                <ul class="rt-sub-menu">
                                    <!-- <li id="menu-item-4918" class="menu-item menu-item-type-custom menu-item-object-custom rt-mega-menu-hover item-4918"><a title="" href="{!!url('/polyester-products')!!}">Polyester Products</a></li>
 -->
                                    <li id="menu-item-2590" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children rt-mega-menu-hover item-2590"><a title="polyester products" href="{!!url('/polyester-products')!!}">Polyester Products</a>
                                        <ul class="rt-sub-menu">
                                            <li id="menu-item-1096" class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-1096"><a title="PSF(Polyester Staple Fiber)" href="{{ route('product.psf') }}">PSF(Polyester Staple Fiber)</a></li>
                                            <li id="menu-item-6557" class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-6557"><a title="Filament" href="{{ route('product.filament') }}">Filament</a></li>
                                            <li id="menu-item-2970" class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-2970"><a title="POY" href="{{ route('product.poy') }}">POY (Partially Oriented Yarn)</a></li>
                                            <li id="menu-item-6558" class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-6558"><a title="FDY" href="{{ route('product.fdy') }}">FDY(Fully Drawn Yarn)</a></li>
                                            <li id="menu-item-2970" class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-2970"><a title="DTY" href="{{ route('product.dty') }}">DTY (Draw Textured Yarn)</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-6557"><a title="Twist Yarn" href="{{ route('product.twisted-yarn') }}">Twisted Yarn</a></li>

                                            <li id="menu-item-6557" class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-6557"><a title="Monofilament" href="{{ route('product.monofilament') }}">Monofilament</a></li>

                                            <li class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-6557"><a title="Dope dyed" href="{!!url('/dope-dyed')!!}">Dope dyed</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-6557"><a title="Spun yarn" href="{{ route('product.spun-yarn') }}">Spun yarn</a></li>
                                            {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-6557"><a title="Open End" href="{!!url('/open-end')!!}">Open End</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover item-6557"><a title="Ring Spun" href="{!!url('/ring-spun')!!}">Ring Spun</a></li> --}}
                                        </ul>
                                    </li>
                                    <li id="menu-item-4918" class="menu-item menu-item-type-custom menu-item-object-custom rt-mega-menu-hover item-4918 navrecycled"><a title="recycle products" href="{!!url('/recycled-products')!!}"><i class="fa fa-recycle"></i> 100% Recycled Polyester </a></li>
                                    {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom rt-mega-menu-hover item-4918 navjetblack" ><a title="super jet black" href="#" class="textwhite"> Super Jet Black</a></li> --}}

                                </ul>
                            </li>
                            <li id="menu-item-1010" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-flyout rt-mega-menu-hover item-1010 @if(isset($active_news)){{$active_news}}@endif">
                                <a class="amenu" title="Columns & News" href="{!!url('/polyester-products')!!}">
                                    Columns & News
                                </a>
                                <ul class="rt-sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover">
                                        <a title="Columns" href="{{ route('blog.circular-economy') }}">Columns</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page rt-mega-menu-hover">
                                        <a title="News" href="#">News</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li id="menu-item-534" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-293 current_page_item menu-flyout rt-mega-menu-hover item-534 @if(isset($active_recycle)){{$active_recycle}}@endif"><a title="recycling" href="{!!url('/recycling')!!}" class="amenu">Recycling</a></li> --}}
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-293 current_page_item menu-flyout rt-mega-menu-hover item-534 @if(isset($active_contact)){{$active_contact}}@endif"><a title="contact us" href="{!!url('/contact')!!}" class="amenu">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- nav -->
                <div class="clearfix"></div>
            </div>
            <!-- header_main -->
        </div>
    </div>
    <!-- wraper_header_main -->
</header>
