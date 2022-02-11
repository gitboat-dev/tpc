<footer class="wraper_footer style-seven">
    <!-- wraper_footer_main -->
    <div class="wraper_footer_main">
        <div class="container">
            <!-- row -->
            <div class="row footer_main">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer_main_item matchHeight">
                        <section id="media_image-3" class="widget widget_media_image text-center">
                            <img width="186" height="45" alt="logo thaipolyester1" src="{{ asset('assets/custom/images/home/logo-white.png')}}" class="image wp-image-5013  attachment-full size-full" style="max-width: 100%; height: auto;" /></section>
                        <section id="consultix_contact_box_widget-2" class="widget widget_consultix_contact_box_widget">
                            <ul class="contact">
                                <li class="address">470 Bangkuntien-Chaitalay Rd., Samaedum, Bangkuntien, Bangkok 10150 Thailand</li>
                                <li class="phone text-white">
                                     +66 34 852371 to 2</li>
                                <li class="email"><a href="mailto:gmkt@thaipolyester.com" style="color:#fff;" class="mail">gmkt@thaipolyester.com</a></li>
                                <li class="email"><a href="mailto:sales@thaipolyester.com" style="color:#fff;" class="mail">sales@thaipolyester.com</a></li>

                            </ul>
                        </section>
                        <section id="consultix_social_widget-2" class="widget widget_consultix_social_widget">
                            <ul class="social">
                                <li class="facebook"><a title="facebook" href="https://www.facebook.com/EcoTPC-101465111232392/" target=&quot;_blank&quot;><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a title="youtube" href="https://www.youtube.com/channel/UC1XsjddKcjF7sOcQIsXHnSQ?view_as=subscriber" target=&quot;_blank&quot;><i class="fa fa-youtube-play"></i></a></li>
                                <li class="vimeo"><a title="linkedin" href="https://www.linkedin.com/company/thai-polyester-co-ltd/" target=&quot;_blank&quot;><i class="fa fa-linkedin"></i></a></li>
                            </ul>

                        </section>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer_main_item matchHeight">
                        <section id="recent-posts-3" class="widget widget_recent_entries">
                            <h5 class="widget-title">Our Products</h5>
                            <ul>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-6398"><a title="polyester products" href="{!!url('/polyester-products')!!}">Polyester Products</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-6398"><a title="recycled products" href="{!!url('/recycled-products')!!}">100% Recycled Polyester</a></li>
                               
                            </ul>
                        </section>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer_main_item matchHeight">
                        <section id="nav_menu-9" class="widget widget_nav_menu">
                            <h5 class="widget-title">Our Businesses</h5>
                            <div class="menu-our-services-container">
                                <ul id="menu-our-services" class="menu rt-mega-menu-transition-slide">
                                   
                                    <li id="menu-item-6398" class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-6398"> <a title="website thai polyester" href="{!!url('/')!!}"><img alt="logo thaipolyester2" src="{{ asset('assets/custom/images/icon/tpc.jpg')}}" class="image wp-image-5013  attachment-full size-full" />&nbsp; Thai Polyester</a></li>
                                   
                                    <li id="menu-item-6397" class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-6397"> <a title="website jongstit" href="http://www.jongstit.com"><img alt="logo jongstit" src="{{ asset('assets/custom/images/icon/jongstit.jpg')}}" class="image wp-image-5013  attachment-full size-full" />&nbsp; Jong Stit</a></li>

                                    <li id="menu-item-6400" class="menu-item menu-item-type-post_type menu-item-object-page menu-flyout rt-mega-menu-hover item-6400"><a title="website fashion hometex" href="http://www.fashionhometex.com/"><img alt="logo fashion home tex" src="{{ asset('assets/custom/images/icon/fashionhometext.jpg')}}" class="image wp-image-5013  attachment-full size-full"/>&nbsp; Fashion Hometex</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb-2">
                    <div class="footer_main_item matchHeight">
                        <section id="text-6" class="widget widget_text">
                            <h5 class="widget-title">Get in touch</h5>
                            <div id="f-alert-msg"></div>
                            <div class="textwidget">
                                <form   method="post"  data-name="Test">
                                    <!-- <div class="mc4wp-form-fields" > -->
                                        @csrf
                                       <span class="text-danger h6 f-name"></span>
                                        <input type="text" name="f-name" id="f-name" placeholder="Name" required />
                                        
                                        <span class="text-danger h6 f-mail"></span>
                                        <input type="email" name="f-mail" id="f-mail" placeholder="Email" required />
                                        
                                        <span class="text-danger h6 f-company"></span>
                                        <input type="text" name="f-company" id="f-company" placeholder="Company" required />
                                        
                                        <span class="text-danger h6 f-description"></span>
                                        <input type="text" name="f-description" id="f-description" placeholder="Message" required />
                                        

                                        <button style="display: inline;" type="button" id="footer-contract">
                                            Submit
                                        </button>
            
                                    <!-- </div> -->
                                    
                                </form>
                                <!-- / MailChimp for WordPress Plugin -->
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- wraper_footer_main -->
    <!-- wraper_footer_copyright -->
    <div class="wraper_footer_copyright">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- footer_copyright -->
                    <div class="footer_copyright text-center">
                        <p> copyright © 2019 Thai polyester Co., Ltd. All rights reserved.</p>
                    </div>
                    <!-- footer_copyright -->
                </div>
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- wraper_er_copyright -->
</footer>
<!-- wraper_footer -->