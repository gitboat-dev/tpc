<style>
    .blog_update{
        position: fixed;
        z-index: 99;
        right: 0;
        top: 30%;
        width: 30%;
        max-width: 832.5px;
    }
    .blog_update .d-flex{
        display: flex;
    }
    .blog_update .m-0{
        margin: 0;
    }
    .blog_update .m-auto{
        margin: auto;
    }
    .blog_update .p-0{
        padding: 0;
    }
    .blog_update .w-100p{
        width: 100%;
    }
    .blog_update .fw-600{
        font-weight: 600;
    }
    .blog_update .update_blog{
        position: relative;
        display: inline-block;
        padding: 10px 15px 5px;
        background-color: var(--msBgDark);
        cursor: pointer;
        float: right;
    }
    .blog_update .update_blog::before{
        content: " ";
        position: absolute;
        top: 0;
        left: -20px;
        width: 30px;
        height: 100%;
        background: linear-gradient(to bottom left, var(--msBgDark) 50%, transparent 53%);
    }
    .blog_update .update_blog::after{
        content: " ";
        position: absolute;
        bottom: 0;
        left: -20px;
        width: 30px;
        height: 100%;
        background: linear-gradient(to top left, var(--msBgDark) 50%, transparent 53%);
    }
    .blog_update .update_blog label{
        color: var(--msBg);
        text-transform: uppercase;
        cursor: pointer;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s;
    }
    .blog_update .update_blog:hover label{
        color: var(--msBgLight);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s;
    }
    .blog_update .update_blog i{
        margin: auto 10px;
    }
    .blog_update .update_sidebar{
        position: absolute;
        top: 45px;
        left: -163px;
        background-color: var(--msBgDark);
        color: var(--msBgLight);
        width: 100%;
        z-index: 999;
        padding: 15px;
    }
    .blog_update .update_sidebar .sidebar-title,
    .blog_update .update_sidebar .sidebar-body{
        position: relative;
    }
    .blog_update .update_sidebar .sidebar-title::before{
        content: " ";
        position: absolute;
        top: 0;
        right: 0;
        height: calc(100% + 10px);
        width: 3px;
        background-color: var(--msBg);
    }
    .blog_update .update_sidebar .sidebar-title::after{
        content: " ";
        position: absolute;
        bottom: -10px;
        right: 0;
        height: 3px;
        width: 100%;
        background-color: var(--msBg);
    }
    .blog_update .update_sidebar .sidebar-body{
        height: 400px;
        overflow-x: hidden;
    }
    .blog_update .update_sidebar .sidebar-body figure {
        padding-top: 7.5px;
        padding-bottom: 7.5px;
    }
    .blog_update .update_sidebar .sidebar-body a {
        color: var(--msBgLight);
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    .blog_update .update_sidebar .sidebar-body a:hover {
        color: var(--msBg);
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    .blog_update .update_sidebar .sidebar-body figure:not(:last-child){
        border-bottom: 1px solid #5f5f5f;
    }
    .blog_update .update_sidebar .sidebar-footer {
        margin-top: 20px;
        position: relative;
    }
    .blog_update .update_sidebar .sidebar-footer::before {
        content: " ";
        position: absolute;
        top: -20px;
        left: 0;
        width: 100%;
        height: 1px;
        background-color: #ccc;
    }
    .blog_update .update_sidebar .btn-allcolumns a {
        font-size: 18px;
        display: block;
        width: fit-content;
        background-color: var(--msBg);
        color: #fff;
        padding: 10px 10px;
        transform: scale(0.9500);
        transition: all 0.2s;
    }
    .blog_update .update_sidebar .btn-allcolumns a:hover {
        transform: scale(1.1009);
        transition: all 0.2s;
    }
</style>
<div class="blog_update">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
            <div class="update_blog">
                <label class="d-flex">
                    <i class="fa fa-angle-left"></i>
                    Update
                </label>
            </div>
            <div class="update_sidebar">
                <div class="sidebar-title">
                    <h3 class="fw-600">Latest Columns</h3>
                </div>
                <div class="sidebar-body">
                    @if(isset($blogs) && $blogs)
                        <div class="row m-0">
                            @foreach($blogs as $bs)
                                <figure class="col-md-12 d-flex">
                                    <a href="/blog/{{$bs['article_slug']}}" class="col-xs-5 col-sm-5 col-md-6 col-lg-4 p-0 m-auto" title="{{$bs['article_title']}}">
                                        <div class="img_block w-100p">
                                            <picture>
                                                <source srcset="{{$bs['cover']['url']}}" media="(max-width: 640px)">
                                                <img src="{{$bs['cover']['url']}}" width="900" height="350" class="img-fluid" alt="">
                                            </picture>
                                        </div>
                                    </a>
                                    <figcaption class="col-xs-7 col-sm-7 col-md-6 col-lg-8 m-auto">
                                        <a href="/blog/{{$bs['article_slug']}}" title="{{$bs['article_title']}}">
                                            <h5 class="fw-600">{{$bs['article_title']}}</h5>
                                        </a>
                                        <small class="gray-hl">{{$bs['article_date_start']}}</small>
                                    </figcaption>
                                </figure>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="sidebar-footer">
                    <div class="btn-allcolumns">
                        <a href="/blog/columns&news/columns" title="All News">All Columns</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

