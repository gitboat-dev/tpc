@extends('landing.template')
@section('style')
<style>
    @media only screen and (max-width: 640px){
        video{
            width: 640px;
            max-width: 640px;
            margin-left: -213.3333333333333px;
        }
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
            <div class="content m-auto">
                <h1 class="fw-bold" style="color: var(--msBg);background-color:#ffffff17;padding: 15px;">
                    Consciously Crafted<br>
                    Garment & Furniture
                </h1>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
@endsection
