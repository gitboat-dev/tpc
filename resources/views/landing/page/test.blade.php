@extends('landing.template')
@section('style')
<style>
    #sec1 .col-h1{
        background-color: #0000002b
    }
    #sec1 .head-btn{
        margin-top: 30px;
    }
    #sec1 .head-btn > a{
        font-size: 20px;
        display: block;
        width: fit-content;
        background-color: var(--msBg);
        color: #fff;
        padding: 15px 15px;
        border-radius: 30px;
        transform: scale(0.9500);
        transition: all 0.2s;
    }
    #sec1 .head-btn > a:hover{
        transform: scale(1.1009);
        transition: all 0.2s;
    }
    #sec1 .head-content .content{
        max-width: 85%;
    }
    #sec1 .head-content .content > *{
        color: #fff;
    }
    @media only screen and (max-width: 640px){
        #sec1 video{
            width: 640px;
            max-width: 640px;
            margin-left: -213.3333333333333px;
        }
        #sec1 .head-content .content{
            max-width: 100%;
        }

        /* end sec1 */
    }
</style>
@endsection
@section('content')
<div id="landing">
    <section id="sec1" class="pos-r">
        <div class="wrapper" style="overflow: hidden;">
            <video autoplay muted loop playsinline id="video1" poster="">
                <source src="\assets\images\landing\test\Landing Page TPC4.mp4" type="video/mp4">
            </video>
        </div>
        <div class="pos-ab w-100p h-100p top-0 left-0 d-flex">
            <div class="row m-0 w-100p h-100p">
                <div class="col-xs-12 col-sm-6 col-md-4 d-flex h-100p col-h1">
                    <div class="head-content h-100p d-flex">
                        <div class="content m-auto">
                            <h1 class="head-title fw-bold">
                                TPC,<br>
                                your Polyester<br>
                                Destination
                            </h1>
                            <div class="head-desc">
                                <p>
                                    - Exporting Polyester Fiber and Yarn to
                                    over 70 countries all around the world.<br>
                                    - Our total capacity of Fiber, Yarn and
                                    Filament is around 350,000 tons annually.
                                </p>
                            </div>
                            <div class="head-btn">
                                <a href="#" title="contact us" class="ml-0">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
@endsection
