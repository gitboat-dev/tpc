
@extends('layouts.template')
@section('content')
<!-- #page -->
<div id="page" class="site">
    <!-- #content -->
    <div id="content" class="site-content">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <!-- wraper_error_main -->
                <div class="wraper_error_main">
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!-- error_main -->
                                <div class="error_main">
                                    <img class="alignnone size-medium wp-image-2674" src="{{ asset('assets/custom/wp-content/uploads/2018/02/404-three.png')}}" alt="404" width="300" height="202">
                                    <h1>PAGE NOT FOUND</h1>
                                    <h2>We’re sorry, the page you have looked for does not exist in our database!
Maybe go to our</h2>
                                    <div class="clearfix"></div>
                                    <a class="btn" href="{{url('/')}}"><span>Home</span></a> </div>
                                <!-- error_main -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                </div>
                <!-- wraper_error_main -->
            </main>
            <!-- #main -->
        </div>
    </div>
</div>

@endsection