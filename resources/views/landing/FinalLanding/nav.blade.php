<nav class="pos-r d-flex bg-green">
    <div class="logo pos-r d-flex">
        <a href="#home">
            <img src="\assets\images\landing\Finallanding\logo_1.png" alt="Thai Poyester">
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
            <li><a href="#present1" class="active">Why you have to choose us?</a></li>
            <li><a href="#news">All Products</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#strength">Our Strength</a></li>
            <li>
                <a href="javascript:void(0)" class="lang">
                    {{$d_lang}} <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <ul class="lang-choice">
                        <li><a href="{{$lang_url}}">{{$lang}}</a></li>
                    </ul>
                </a>
            </li>
        </ul>
    </div>
</nav>
