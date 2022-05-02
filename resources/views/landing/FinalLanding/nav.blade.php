<nav id="header" class="pos-r d-flex bg-green">
    <div class="logo pos-r d-flex">
        <a href="#home">
            <img src="/assets/images/landing/Finallanding/logo_1.webp" alt="Thai Poyester">
        </a>
        <div class="m-menu-block pos-r w-100p">
            <div class="m-menu pos-ab d-flex h-100p w-100p right-0">
                <div class="m-menu-icon">
                    <div class="burger-menu" onclick="landing_menu(this);">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="topnav pos-r d-flex">
        <ul class="d-flex">
            <li><a href="#sec3" class="active">Why you have to choose us?</a></li>
            <li><a href="#sec4">All Products</a></li>
            <li><a href="#sec5">About Us</a></li>
            <li><a href="#sec6">Our Strength</a></li>
            <li class="lang pos-r">
                {{$d_lang}} <i class="fa fa-angle-down" aria-hidden="true"></i>
                <ul class="lang-choice">
                    <li class="text-center"><a href="{{$lang_url}}">{{$lang}}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
